class CreateMessages < ActiveRecord::Migration
  def change
    create_table :messages do |t|
      t.integer :id_nadawcy
      t.integer :id_odbiorcy
      t.string :text


      t.timestamps
    end
  end
end
