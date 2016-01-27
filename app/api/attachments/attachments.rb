# in /app/main/api.rb
module Attachments
    class AttachmentsController < Grape::API
        version 'v1', using: :header, vendor: 'some_vendor'
        format :json
        use ::WineBouncer::OAuth2


        #curl -H 'Authorization: Bearer <token>' -F file=@<full_file_path> -X POST http://localhost:3000/api/upload_document

        resource :upload_document do
          oauth2
          oauth2
            post do
                # takes the :avatar value and assigns it to a variable
                file = params[:file]


                # the avatar parameter needs to be converted to a
                # hash that paperclip understands as:
                attachment = {
                    :filename => file[:filename],
                    :type => file[:type],
                    :headers => file[:head],
                    :tempfile => file[:tempfile],
                  }

                # creates a new User object
                pdf = Document.new
                pdf.user_id = resource_owner.id

                # This is the kind of File object Grape understands so let's
                # pass the hash to it
                pdf.attachment = ActionDispatch::Http::UploadedFile.new(attachment)

                # easy
                pdf.attachment_path = attachment[:filename]

                # even easier
                #user.name = "dummy name"

                # and...
                pdf.save
            end
        end
        # curl -H 'Authorization: Bearer <token>' -X DELETE http://localhost:3000/api/delete_document/<id>
        resource :delete_document do
          oauth2
          params do
            requires :id, type: Integer, desc: 'document_id.'
          end

          delete ':id' do
              Document.find(params[:id]).destroy
          end
        end

        #curl -v -H 'Authorization: Bearer <token>' -X GET http://localhost:3000/api/show_all_documents_for_user/<user_id>


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
