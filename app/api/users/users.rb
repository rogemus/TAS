module Users
	class UsersController < Grape::API
		version 'v1', using: :path 
		format :json
		# use ::WineBouncer::OAuth2
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




			
		end
	end
end