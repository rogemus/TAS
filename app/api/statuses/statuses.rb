# require 'doorkeeper/grape/helpers'
module Statuses
	class StatusesController < Grape::API
		version 'v1', using: :path 
		format :json
		use ::WineBouncer::OAuth2

		helpers do
			# Find the user that owns the access token
  			def current_resource_owner
    			User.find(doorkeeper_token.resource_owner_id) if doorkeeper_token
  			end
		end

		resource :statuses do

			desc 'Return a stauses feed'
			# oauth2
			get :statuses do
				Status.all
				# User.all
			end

			desc 'Create a status'
			oauth2
			params do
				requires :content, type: String, desc: 'Status content'
			end
			post :new do
				Status.create!({
					user_id: resource_owner.id,
					content: params[:content]
				})
			end

			desc 'Update a status.'
			oauth2
			params do
				requires :id, type: Integer, desc: 'Status ID.'
				requires :content, type: String, desc: 'Updated status content'
			end
			put ':id' do
				resource_owner.statuses.find(params[:id]).update({
					user_id: resource_owner.id,
					content: params[:content]
					})
			end




		end
	end
end