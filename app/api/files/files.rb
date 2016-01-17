# in /app/main/api.rb
module Files
	class FilesController < Grape::API
		version 'v1', using: :path
		format :json
		formatter :json, Grape::Formatter::ActiveModelSerializers
		use ::WineBouncer::OAuth2

		rescue_from WineBouncer::Errors::OAuthUnauthorizedError do |e|
			error!({ error: e.message }, 401)
		end

		helpers do
			# Find the user that owns the access token
  			def current_resource_owner
    			User.find(doorkeeper_token.resource_owner_id) if doorkeeper_token
  			end
		end

		resource :images
			desc 'Dodawanie obrazu'
			resource :upload_image do
				oauth2
				post do
					avatar = params[:avatar]
					attachment = {
						:filename => avatar[:filename],
						:type => avatar[:type],
						:headers => avatar[:head],
						:tempfile => avatar[:tempfile],
					}
					image = Image.new
					image.user_id = resource_owner.id
					image.img = ActionDispatch::Http::UploadedFile.new(attachment)
					image.image_path = attachment[:filename]
					image.save
				end
			end
			resource :delete_image do
				desc 'Usuwanie obrazu po po konkretnym id'
				oauth2
				params do
					requires :id, type: Integer, desc: 'image_id.'
				end

				delete ':id' do
					Image.find(params[:id]).destroy
				end
			end
			
			resource :show_all_img_for_user do
				desc 'Pokaz wszystkie obrazy dodane przez uzytkownika'
				oauth2
				params do
					requires :user_id, type: Integer, desc: 'User id'
				end
				
				get ':user_id' do
					Image.where(params[:user_id])
				end
			end
		end
	end
end
