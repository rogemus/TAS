class UserSerializer < ActiveModel::Serializer
  attributes :id, :profile_name, :first_name, :last_name, :email

  has_many :statuses, serializer: StatusesShortSerializer     
end
