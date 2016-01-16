module Comments
    class CommentsController < Grape::API
        version 'v1', using: :header, vendor: 'some_vendor'
        format :json
        use ::WineBouncer::OAuth2

        resource :do_comment do
          oauth2
          params do
            requires :post_id, type: Integer, desc: 'Id postu'
            requires :comment, type: String, desc: 'Komentarz'
            end
           post do
             Comment.create!({
               post_id: params[:post_id],
               author_id: resource_owner.id,
               comment: params[:comment]
               })
            end
          end

          resource :delete_comment do
              oauth2
              params do
                requires :id, type: Integer, desc: 'Id komentarza'
               end
               delete ':id' do
                  Comment.find(params[:id]).destroy
               end
             end

          resource :update_comment do
             oauth2
             params do
               requires :post_id, type: Integer, desc: 'Id komentarza'
               requires :comment, type: String, desc: 'Komentarz'
             end
             put ':id' do
               Comment.find(params[:id]).comment = params[:comment]
 			         end
 		        end

            resource :get_comments_for_post do
              oauth2
              params do
                requires :post_id, type: Integer, desc: 'Id komentarza'
              end
              get ':post_id' do
                Comment.find(params[:id])
              end
            end
          end
        end
