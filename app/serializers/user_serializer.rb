class UserSerializer < ActiveModel::Serializer
  attributes :id, :first_name, :last_name, :email


 # has_many :statuses     !!!!Creates never stopable recursion,
end
