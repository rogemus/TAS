TAS::Application.routes.draw do
  get 'profiles/show'

  use_doorkeeper
  mount Statuses::StatusesController => '/api'
  mount Users::UsersController => '/api'
  mount Friendships::FriendshipsController => '/api'
  mount Comments::CommentsController => '/api'
  mount Files::FilesController => '/api'
  mount Attachments::AttachmentsController => '/api'
  mount Messages::MessagesController => '/'

  resources :user_friendships do
    member do
      put :accept
    end
  end
end
