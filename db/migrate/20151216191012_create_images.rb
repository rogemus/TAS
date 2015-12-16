class CreateImages < ActiveRecord::Migration
  def change
    create_table :images do |t|
      t.integer :user_id
      t.timestamps
    end

    add_index :images, :user_id
    add_attachment :images, :img
    add_column :statuses, :image_id, :integer
  end
end
