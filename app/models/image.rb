class Image < ActiveRecord::Base

  attr_accessible :img
  has_attached_file :img

  validates_attachment_content_type :img, :content_type => /\Aimage\/.*\Z/, :message => ['Only images']
  attr_accessor :remove_img

  before_save :perform_img_removal
  def perform_img_removal
      if remove_img == '1' && !img.dirty?
        self.img = nil
      end
  end
  end
