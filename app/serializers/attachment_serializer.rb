class AttachmentSerializer < ActiveModel::Serializer
  attributes :attachment, :attachment_path, :user_id, :created_at, :updated_at
end
