# in /app/main/api.rb
module Attachments
    class AttachmentsController < Grape::API
      version 'v1', using: :path
  		format :json
  		formatter :json, Grape::Formatter::ActiveModelSerializers
  		use ::WineBouncer::OAuth2
  		default_error_status 400
  		helpers do
  			def current_resource_owner
  				User.find(doorkeeper_token.resource_owner_id) if doorkeeper_token
  			end
  		end
        #curl -H 'Authorization: Bearer <token>' -F file=@<full_file_path> -X POST http://localhost:3000/api/v1/files/upload_document
      resource :files do
        resource :upload_document do
          oauth2
            post do
                file = params[:file]
                attachment = {
                    :filename => file[:filename],
                    :type => file[:type],
                    :headers => file[:head],
                    :tempfile => file[:tempfile],
                  }
                pdf = Document.new
                pdf.user_id = resource_owner.id
                pdf.attachment = ActionDispatch::Http::UploadedFile.new(attachment)
                pdf.attachment_path = attachment[:filename]
                pdf.save
                if pdf.save!
                  render pdf.id
                else
                  #todo
                end
            end
        end
        # curl -H 'Authorization: Bearer <token>' -X DELETE http://localhost:3000/api/v1/files/delete_document/<id>
        resource :delete_document do
          oauth2
          params do
            requires :id, type: Integer, desc: 'document_id.'
          end

          delete ':id' do
              Document.find(params[:id]).destroy
          end
        end

        #curl -v -H 'Authorization: Bearer <token>' -X GET http://localhost:3000/api//v1/files/show_all_documents_for_user/<user_id>
        resource :show_all_documents_for_user do
          oauth2
          params do
            requires :user_id, type: Integer, desc: 'Id uzytkownika'
          end

          get ':user_id' do
            Document.where(params[:user_id])
          end
        end
    end
  end
end
