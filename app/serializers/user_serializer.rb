class UserSerializer < ActiveModel::Serializer
  attributes :id, :profile_name, :full_name, :email, :gravatar_url

  has_many :statuses, serializer: StatusesShortSerializer     
end
