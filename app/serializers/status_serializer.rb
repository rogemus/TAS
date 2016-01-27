class StatusSerializer < ActiveModel::Serializer
  attributes :id, :content, :image_id, :created_at, :updated_at

  has_one :user, serializer: UserShortSerializer
  has_one :image
  has_one :document
end
