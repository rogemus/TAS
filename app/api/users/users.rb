module Users
	class UsersController < Grape::API
		version 'v1', using: :path 
		format :json
		formatter :json, Grape::Formatter::ActiveModelSerializers
		use ::WineBouncer::OAuth2
		resource :users do

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

			desc 'Get user private feed'
			#oauth2
			params do
				requires :id, type: Integer, desc: 'User ID.'
			end
			get ':id' do
				User.find(params[:id])
			end




			
		end
	end
end