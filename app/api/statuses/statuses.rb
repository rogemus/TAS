# require 'doorkeeper/grape/helpers'
module Statuses
	class API < Grape::API
		version 'v1', using: :path 
		format :json
		use ::WineBouncer::OAuth2


		# helpers Doorkeeper::Grape::Helpers

		# before do
  #       	doorkeeper_authorize!
  #     	end


		resource :statuses do

			desc 'Return a stauses feed'
			oauth2
			get :statuses do
				Status.all
			end




			# desc 'Update a status.'
   #   		params do
   #    			requires :id, type: Integer, desc: 'Status ID.'
   #      		requires :content, type: String, desc: 'Your status.'
   #    		end
			# put :statuses do
			# end



			desc 'Createing new user'
			params do
				requires :first_name, type: String, desc: 'First name'
				requires :last_name, type: String, desc: 'Last name'
				requires :profile_name, type: String, desc: 'Profile name'
				requires :email , type: String, desc: 'Email adress'
				requires :password, type: String, desc: 'Password'
				requires :password_confirmation , type: String, desc: 'Password confirmation'
				
			end
			post :statuses do
				User.create!(params)
			end

		end




	end
end