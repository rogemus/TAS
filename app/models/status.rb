class Status < ActiveRecord::Base
<<<<<<< HEAD
    attr_accessible :content, :user_id
    belongs_to :user

 	validates :content, presence: true,
                      length: { minimum: 2 }
                      
    validates :user_id, presence: true

||||||| merged common ancestors
    attr_accessible :content
=======
    attr_accessible :content, :user_id
    belongs_to :user
>>>>>>> origin/master
end
