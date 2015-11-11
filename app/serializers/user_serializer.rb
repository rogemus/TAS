class UserSerializer < ActiveModel::Serializer
  attributes :id, :profile_name, :full_name, :email

  has_many :statuses, serializer: StatusesShortSerializer     
end
