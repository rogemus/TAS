class Comment < ActiveRecord::Base

    belongs_to :user
    belongs_to :statuses
    attr_accessible :comment, :post_id, :author_id, :user

 	  validates :comment, presence: true,
                      length: { minimum: 2 }



    #validates :post_id, presence: true

end
