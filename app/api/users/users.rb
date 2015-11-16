module Users
	class UsersController < Grape::API
		version 'v1', using: :path 
		format :json
		formatter :json, Grape::Formatter::ActiveModelSerializers
		use ::WineBouncer::OAuth2
		resource :users do

			desc 'Get infromation about resource owner'
			oauth2
			get :me, root: false, serializer: UserShortSerializer do
				resource_owner
			end

			desc 'Createing new user'
			params do
				requires :first_name, type: String, desc: 'First name'
				requires :last_name, type: String, desc: 'Last name'
				requires :profile_name, type: String, desc: 'Profile name'
				requires :email , type: String, desc: 'Email adress'
				requires :password, type: String, desc: 'Password'
				requires :password_confirmation , type: String, desc: 'Password confirmation'
			end
			post :sign_up do
				User.create!(params)
			end


			resource :recent do
				desc 'Get user private feed'
				# oauth2
				params do
					requires :id, type: Integer, desc: 'User ID.'
					optional :count, type: Integer, default: 2, desc: 'How many statuses' # Max 200
					optional :min_id, type: Integer, desc: 'Status ID' #can be null
					optional :max_id, type: Integer, desc: 'Status ID' #can be null
					optional :min_timestamp, type: DateTime, desc: 'Min timestamp ID' #can be null
					optional :max_timestamp, type: DateTime, desc: 'Max timestamp ID' #can be null

				end
				get ':id' do
					Status.where("user_id = ? AND created_at >= ?", params[:id], params[:min_timestamp])
				end
			end

		end
	end
end