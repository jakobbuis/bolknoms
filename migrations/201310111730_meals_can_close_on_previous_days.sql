# Change the definition of the column
ALTER TABLE `meals`  CHANGE COLUMN `locked` `locked` DATETIME NOT NULL ;

# Update data of existing rows
UPDATE `meals` SET `locked` = ADDTIME(`date`, '15:00:00');
