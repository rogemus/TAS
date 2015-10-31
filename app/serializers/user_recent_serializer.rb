class UserRecentSerializer < ActiveModel::Serializer
  attributes :id

  has_one :user, class_name: "Status"
end
