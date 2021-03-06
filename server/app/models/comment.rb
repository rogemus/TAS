class Comment < ActiveRecord::Base

    belongs_to :user, class_name: 'User', foreign_key: 'author_id'
    belongs_to :statuses, class_name: 'Status', foreign_key: 'post_id'
    attr_accessible :comment, :post_id, :author_id, :user

 	  validates :comment, presence: true,
                      length: { minimum: 2 }



    #validates :post_id, presence: true

end
