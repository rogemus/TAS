require 'test_helper'

class AddAFriendTest < ActionDispatch::IntegrationTest
  def sign_in_as(user, password)
  	post login_path, user: { email: user.email, password: password}
  end


  test "that adding a friend work" do
  	sign_in_as users(:jason), "testing"
  	get "/user_friendship/new?friend_id=#{users(:jim).profile_name}"
  	assert_response :success
  end 
end
