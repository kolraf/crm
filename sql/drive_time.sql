CREATE TABLE IF NOT EXISTS drive_time(
  id INT(11) AUTO_INCREMENT NOT NULL,
  start_time DATETIME NOT NULL,
  end_time DATETIME NOT NULL,
  user_id INT(11),
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES user(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)Engine=InnoDB;