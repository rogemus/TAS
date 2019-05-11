module Files
	class FilesController < Grape::API
		version 'v1', using: :path
		format :json
		formatter :json, Grape::Formatter::ActiveModelSerializers
		use ::WineBouncer::OAuth2

		default_error_status 400

		helpers do
		# Find the user that owns the access token
			def current_resource_owner
				User.find(doorkeeper_token.resource_owner_id) if doorkeeper_token
			end
		end

		resource :images do
			# curl -H 'Authorization: Bearer <token>' -F avatar=@ <zdjęcie> -X POST http://localhost:3000/api/v1/images/upload_image
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
          if image.save!
            render image.id
          else
            #todo
          end
				end
			end

			# curl -H 'Authorization: Bearer <token>'  -X GET http://localhost:3000/api/v1/images/show_all_img_for_user/<id uzytkownika>
			resource :show_all_img_for_user do
				desc 'Pokaz wszystkie obrazy dodane przez uzytkownika'
				#oauth2
				params do
					requires :user_id, type: Integer, desc: 'User id'
				end

				get ':user_id' do
					Image.where(params[:user_id])
				end
			end
			# curl -H 'Authorization: Bearer <token>' -F avatar=@ <zdjęcie> -X POST http://localhost:3000/api/v1/images/delete_image/<id>
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
		end
	end
end
