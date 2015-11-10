class UserShortSerializer < ActiveModel::Serializer
 attributes :id, :profile_name, :first_name, :last_name, :email
end
