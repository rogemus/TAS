# in /app/main/api.rb
module Attachments
    class AttachmentsController < Grape::API
        version 'v1', using: :header, vendor: 'some_vendor'
        format :json
        use ::WineBouncer::OAuth2

        resource :upload1 do
          oauth2
          oauth2
            post do
                # takes the :avatar value and assigns it to a variable
                avatar = params[:avatar]


                # the avatar parameter needs to be converted to a
                # hash that paperclip understands as:
                attachment = {
                    :filename => avatar[:filename],
                    :type => avatar[:type],
                    :headers => avatar[:head],
                    :tempfile => avatar[:tempfile],
                    #:user_id => integer(2)
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

    end
end
