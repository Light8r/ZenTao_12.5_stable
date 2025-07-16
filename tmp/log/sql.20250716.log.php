<?php
 die();
?>
20250716 15:25:44: /index.php?m=tutorial&f=index&referer=&task=createAccount
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  REPLACE `zt_config` SET `owner` = 'admin',`module` = 'common',`section` = 'global',`key` = 'novice',`value` = '1'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:25:45: /index.php?m=my&f=index&t=tutorial
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '1'
  SELECT * FROM `zt_config` WHERE module  = 'tutorial' AND  owner  = 'admin' AND  section  = 'tasks' AND  `key`  = 'setting'
  SELECT count(*) AS count FROM `zt_task` WHERE assignedTo  = 'admin' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_bug` WHERE assignedTo  = 'admin' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_story` WHERE assignedTo  = 'admin' AND  deleted  = '0' AND  type  = 'story'
  SELECT count(*) AS count FROM `zt_project` WHERE status  NOT IN ('done','closed') AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_product` WHERE status  != 'closed' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_task` WHERE assignedTo  = 'admin' AND  status IN ('wait','doing') AND  deadline  != '0000-00-00' AND  deadline  < '2025-07-16' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_bug` WHERE assignedTo  = 'admin' AND  status  = 'active' AND  deadline  != '0000-00-00' AND  deadline  < '2025-07-16' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_project` WHERE status IN ('wait','doing') AND  end  < '2025-07-16' AND  deleted  = '0'
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT *, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT id,parent,project,status,finishedDate,estimate,consumed,`left` FROM `zt_task` WHERE project IN ('2','1') AND  deleted  = '0'
  SELECT t1.project, count(t2.status) as totalStories, count(t2.status != 'closed' or null) as unclosedStories, count(t2.stage = 'released' or null) as releasedStories FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  WHERE t1.project IN ('2','1') AND  t2.deleted  = '0' GROUP BY project
  SELECT project, status, count(status) as totalBugs, count(status = 'active' or null) as activeBugs, count(resolvedDate like '2025-07-15%' or null) as yesterdayResolved FROM `zt_bug` WHERE project IN ('2','1') AND  deleted  = '0' GROUP BY project
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT id,name,short FROM `zt_module` WHERE type  = 'line' AND  deleted  = '0'
  SELECT product, stage, COUNT(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('2','1') AND  type  = 'story' GROUP BY product, stage
  SELECT product, end FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('2','1')
  SELECT t1.product, t2.status, t2.end FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('2','1') AND  t2.deleted  = '0'
  SELECT product, status, COUNT(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('2','1') GROUP BY product, status
  SELECT product, COUNT(*) AS count FROM `zt_release` WHERE date  = '2025-07-15' AND  product IN ('2','1') GROUP BY product
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE 1=1  AND  lib IN ('4','3','2','1')
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE 1  AND  date  > '2025-07-16' AND  date  < '2025-07-17' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2025-07-16' AND  date  < '2025-07-17' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE 1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') AND  cycle  = '0' ORDER BY `date`,`begin`  LIMIT 20 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT *, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  status  != 'closed' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:25:47: /
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 

20250716 15:25:47: /index.php?m=my&f=index
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '1'
  SELECT * FROM `zt_config` WHERE module  = 'tutorial' AND  owner  = 'admin' AND  section  = 'tasks' AND  `key`  = 'setting'
  SELECT count(*) AS count FROM `zt_task` WHERE assignedTo  = 'admin' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_bug` WHERE assignedTo  = 'admin' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_story` WHERE assignedTo  = 'admin' AND  deleted  = '0' AND  type  = 'story'
  SELECT count(*) AS count FROM `zt_project` WHERE status  NOT IN ('done','closed') AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_product` WHERE status  != 'closed' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_task` WHERE assignedTo  = 'admin' AND  status IN ('wait','doing') AND  deadline  != '0000-00-00' AND  deadline  < '2025-07-16' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_bug` WHERE assignedTo  = 'admin' AND  status  = 'active' AND  deadline  != '0000-00-00' AND  deadline  < '2025-07-16' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_project` WHERE status IN ('wait','doing') AND  end  < '2025-07-16' AND  deleted  = '0'
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT *, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT id,parent,project,status,finishedDate,estimate,consumed,`left` FROM `zt_task` WHERE project IN ('2','1') AND  deleted  = '0'
  SELECT t1.project, count(t2.status) as totalStories, count(t2.status != 'closed' or null) as unclosedStories, count(t2.stage = 'released' or null) as releasedStories FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  WHERE t1.project IN ('2','1') AND  t2.deleted  = '0' GROUP BY project
  SELECT project, status, count(status) as totalBugs, count(status = 'active' or null) as activeBugs, count(resolvedDate like '2025-07-15%' or null) as yesterdayResolved FROM `zt_bug` WHERE project IN ('2','1') AND  deleted  = '0' GROUP BY project
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT id,name,short FROM `zt_module` WHERE type  = 'line' AND  deleted  = '0'
  SELECT product, stage, COUNT(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('2','1') AND  type  = 'story' GROUP BY product, stage
  SELECT product, end FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('2','1')
  SELECT t1.product, t2.status, t2.end FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('2','1') AND  t2.deleted  = '0'
  SELECT product, status, COUNT(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('2','1') GROUP BY product, status
  SELECT product, COUNT(*) AS count FROM `zt_release` WHERE date  = '2025-07-15' AND  product IN ('2','1') GROUP BY product
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE 1=1  AND  lib IN ('4','3','2','1')
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE 1  AND  date  > '2025-07-16' AND  date  < '2025-07-17' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2025-07-16' AND  date  < '2025-07-17' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE 1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') AND  cycle  = '0' ORDER BY `date`,`begin`  LIMIT 20 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT *, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  status  != 'closed' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:25:49: /index.php?m=tutorial&f=ajaxQuit&t=html
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  REPLACE `zt_config` SET `owner` = 'admin',`module` = 'common',`section` = 'global',`key` = 'novice',`value` = '0'

20250716 15:25:49: /index.php?m=my&f=index
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '1'
  SELECT * FROM `zt_config` WHERE module  = 'tutorial' AND  owner  = 'admin' AND  section  = 'tasks' AND  `key`  = 'setting'
  SELECT count(*) AS count FROM `zt_task` WHERE assignedTo  = 'admin' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_bug` WHERE assignedTo  = 'admin' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_story` WHERE assignedTo  = 'admin' AND  deleted  = '0' AND  type  = 'story'
  SELECT count(*) AS count FROM `zt_project` WHERE status  NOT IN ('done','closed') AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_product` WHERE status  != 'closed' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_task` WHERE assignedTo  = 'admin' AND  status IN ('wait','doing') AND  deadline  != '0000-00-00' AND  deadline  < '2025-07-16' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_bug` WHERE assignedTo  = 'admin' AND  status  = 'active' AND  deadline  != '0000-00-00' AND  deadline  < '2025-07-16' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_project` WHERE status IN ('wait','doing') AND  end  < '2025-07-16' AND  deleted  = '0'
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT *, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT id,parent,project,status,finishedDate,estimate,consumed,`left` FROM `zt_task` WHERE project IN ('2','1') AND  deleted  = '0'
  SELECT t1.project, count(t2.status) as totalStories, count(t2.status != 'closed' or null) as unclosedStories, count(t2.stage = 'released' or null) as releasedStories FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  WHERE t1.project IN ('2','1') AND  t2.deleted  = '0' GROUP BY project
  SELECT project, status, count(status) as totalBugs, count(status = 'active' or null) as activeBugs, count(resolvedDate like '2025-07-15%' or null) as yesterdayResolved FROM `zt_bug` WHERE project IN ('2','1') AND  deleted  = '0' GROUP BY project
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT id,name,short FROM `zt_module` WHERE type  = 'line' AND  deleted  = '0'
  SELECT product, stage, COUNT(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('2','1') AND  type  = 'story' GROUP BY product, stage
  SELECT product, end FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('2','1')
  SELECT t1.product, t2.status, t2.end FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('2','1') AND  t2.deleted  = '0'
  SELECT product, status, COUNT(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('2','1') GROUP BY product, status
  SELECT product, COUNT(*) AS count FROM `zt_release` WHERE date  = '2025-07-15' AND  product IN ('2','1') GROUP BY product
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE 1=1  AND  lib IN ('4','3','2','1')
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE 1  AND  date  > '2025-07-16' AND  date  < '2025-07-17' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2025-07-16' AND  date  < '2025-07-17' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE 1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') AND  cycle  = '0' ORDER BY `date`,`begin`  LIMIT 20 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT *, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  status  != 'closed' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:25:52: /index.php?m=product&f=index&locate=no
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  REPLACE `zt_config` SET `owner` = 'admin',`module` = 'product',`section` = 'common',`key` = 'blockInited',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'admin',`module` = 'product',`section` = 'block',`key` = 'initVersion',`value` = '2'
  REPLACE `zt_block` SET `title` = '产品统计',`block` = 'statistic',`grid` = '8',`params` = '{\"type\":\"all\",\"num\":\"20\"}',`order` = '1',`module` = 'product',`account` = 'admin',`source` = 'product'
  REPLACE `zt_block` SET `title` = '产品总览',`block` = 'overview',`grid` = '4',`order` = '2',`module` = 'product',`account` = 'admin',`params` = '',`source` = 'product'
  REPLACE `zt_block` SET `title` = '未关闭的产品',`block` = 'list',`grid` = '8',`params` = '{\"num\":15,\"type\":\"noclosed\"}',`order` = '3',`module` = 'product',`account` = 'admin',`source` = 'product'
  REPLACE `zt_block` SET `title` = '指派给我的需求',`block` = 'story',`grid` = '4',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '4',`module` = 'product',`account` = 'admin',`source` = 'product'

20250716 15:25:52: /index.php?m=product&f=index&locate=no
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '10'
  SELECT * FROM `zt_block` WHERE id  = '10'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT id,name,short FROM `zt_module` WHERE type  = 'line' AND  deleted  = '0'
  SELECT product, stage, COUNT(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('2','1') AND  type  = 'story' GROUP BY product, stage
  SELECT product, end FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('2','1')
  SELECT t1.product, t2.status, t2.end FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('2','1') AND  t2.deleted  = '0'
  SELECT product, status, COUNT(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('2','1') GROUP BY product, status
  SELECT product, COUNT(*) AS count FROM `zt_release` WHERE date  = '2025-07-15' AND  product IN ('2','1') GROUP BY product
  SELECT * FROM `zt_block` WHERE id  = '12'
  SELECT * FROM `zt_block` WHERE id  = '12'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  type  = 'story' AND  product IN ('2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('2','1') AND  end  > '2025-07-16 15:25:52' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE deleted  = '0' AND  status  = 'active' AND  product IN ('2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE deleted  = '0' AND  assignedTo  = '' AND  product IN ('2','1') GROUP BY product
  SELECT t1.product,t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('2','1') AND  t2.deleted  = '0' ORDER BY t1.`project` 
  SELECT * FROM `zt_block` WHERE id  = '11'
  SELECT * FROM `zt_block` WHERE id  = '11'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '13'
  SELECT * FROM `zt_block` WHERE id  = '13'
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  t1.type  = 'story' AND  t1.status  != 'closed' AND  assignedTo  = 'admin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  t1.type  = 'story' AND  t1.status  != 'closed' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_story` WHERE id IN ('')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:25:54: /index.php?m=qa&f=index
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  REPLACE `zt_config` SET `owner` = 'admin',`module` = 'qa',`section` = 'common',`key` = 'blockInited',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'admin',`module` = 'qa',`section` = 'block',`key` = 'initVersion',`value` = '2'
  REPLACE `zt_block` SET `title` = '测试统计',`block` = 'statistic',`grid` = '8',`params` = '{\"type\":\"noclosed\",\"num\":\"20\"}',`order` = '1',`module` = 'qa',`account` = 'admin',`source` = 'qa'
  REPLACE `zt_block` SET `title` = '指派给我的Bug',`block` = 'bug',`grid` = '4',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '2',`module` = 'qa',`account` = 'admin',`source` = 'qa'
  REPLACE `zt_block` SET `title` = '指派给我的用例',`block` = 'case',`grid` = '4',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}',`order` = '3',`module` = 'qa',`account` = 'admin',`source` = 'qa'
  REPLACE `zt_block` SET `title` = '待测版本列表',`block` = 'testtask',`grid` = '8',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"wait\"}',`order` = '4',`module` = 'qa',`account` = 'admin',`source` = 'qa'

20250716 15:25:54: /index.php?m=qa&f=index
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '14'
  SELECT * FROM `zt_block` WHERE id  = '14'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT id,name,short FROM `zt_module` WHERE type  = 'line' AND  deleted  = '0'
  SELECT * FROM `zt_testtask` WHERE product IN ('2','1') AND  project  != '0' AND  deleted  = '0' ORDER BY `id` 
  SELECT product, count(id) as total,
            count(assignedTo = 'admin' or null) as assignedToMe,
            count(status != 'closed' or null) as unclosed,
            count((status != 'closed' and status != 'resolved') or null) as unresolved,
            count(confirmed = '0' or null) as unconfirmed,
            count((resolvedDate >= '2025-07-15' and resolvedDate < '2025-07-16') or null) as yesterdayResolved,
            count((closedDate >= '2025-07-15' and closedDate < '2025-07-16') or null) as yesterdayClosed FROM `zt_bug` WHERE product IN ('2','1') AND  deleted  = '0' GROUP BY product
  SELECT count(product) as product FROM `zt_action` WHERE objectType  = 'bug' AND  action  = 'bugconfirmed' AND  date  >= '2025-07-15' AND  date  < '2025-07-16' GROUP BY product
  SELECT * FROM `zt_block` WHERE id  = '17'
  SELECT * FROM `zt_block` WHERE id  = '17'
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 
  SELECT * FROM `zt_block` WHERE id  = '15'
  SELECT * FROM `zt_block` WHERE id  = '15'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  status  != 'closed' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_block` WHERE id  = '16'
  SELECT * FROM `zt_block` WHERE id  = '16'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:25:57: /index.php?m=testtask&f=browse&productID=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT COUNT(*) AS recTotal FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project and t1.product = t5.product  WHERE t1.deleted  = '0' AND  t1.auto  != 'unit' AND  t1.project IN ('0','1','2') AND  t1.product  = '1' AND  t1.status IN ('blocked','doing','wait','done') 
  SELECT t1.*, t2.name AS productName, t3.name AS projectName, t4.name AS buildName, if(t4.name != '', t4.branch, t5.branch) AS branch FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project and t1.product = t5.product  WHERE t1.deleted  = '0' AND  t1.auto  != 'unit' AND  t1.project IN ('0','1','2') AND  t1.product  = '1' AND  t1.status IN ('blocked','doing','wait','done') ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:25:58: /index.php?m=testtask&f=cases&taskID=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_testtask` WHERE id  = '1'
  SELECT name,type FROM `zt_product` WHERE id  = '1'
  SELECT name FROM `zt_project` WHERE id  = '1'
  SELECT branch FROM `zt_projectproduct` WHERE project  = '1' AND  product  = '1'
  SELECT branch,name FROM `zt_build` WHERE id  = 'trunk'
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT t1.*, t2.name AS productName, t3.name AS projectName, t4.name AS buildName, if(t4.name != '', t4.branch, t5.branch) AS branch FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project and t1.product = t5.product  WHERE t1.deleted  = '0' AND  t1.auto  != 'unit' AND  t1.project IN ('0','1','2') AND  t1.product  = '1' AND  t1.status IN ('blocked','doing','wait','done') ORDER BY `id` desc 
  SELECT * FROM `zt_project` WHERE `id` = '1' 
  SELECT 
            ROUND(SUM(estimate), 2) AS totalEstimate,
            ROUND(SUM(consumed), 2) AS totalConsumed,
            ROUND(SUM(`left`), 2) AS totalLeft FROM `zt_task` WHERE project  = '1' AND  deleted  = '0' AND  parent  < '1'
  SELECT ROUND(SUM(`left`), 2) AS totalLeft FROM `zt_task` WHERE project  = '1' AND  deleted  = '0' AND  parent  < '1' AND  status IN ('closed','cancel')
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE root  = '1' AND  type  = 'project'
  SELECT account, realname, deleted, INSTR(',qd,qa,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT COUNT(*) AS recTotal FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_story` AS t3  ON t2.story = t3.id  WHERE t1.task  = '1' AND  t2.deleted  = '0' 
  SELECT t2.*,t1.*,t2.version as caseVersion,t3.title as storyTitle,t2.status as caseStatus FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_story` AS t3  ON t2.story = t3.id  WHERE t1.task  = '1' AND  t2.deleted  = '0' ORDER BY t2.`id` desc,t2.`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '1'
  SELECT id,name FROM `zt_testsuite` WHERE product  = '0' AND  deleted  = '0' AND  type  = 'library' ORDER BY `id` desc 
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `result` IN ('1','2','3','4') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `run` IN ('1','2','3','4') GROUP BY `run`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `run` IN ('1','2','3','4') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_testrun` AS t2  ON t1.`case`=t2.`case`  WHERE t2.`id` IN ('1','2','3','4') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT account, realname, deleted, INSTR(',qd,qa,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '1'
  SELECT * FROM `zt_branch` WHERE product  = '1' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:26:14: /index.php?m=testcase&f=view&caseID=4&version=1&from=testtask&taskID=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '4' 
  SELECT title, status, version FROM `zt_story` WHERE `id` = '3' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '4'
  SELECT * FROM `zt_casestep` WHERE `case`  = '4' AND  version  = '1' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '4' AND  extra  != 'editor' AND  deleted  = '0'
  SELECT * FROM `zt_testrun` WHERE task  = '1' AND  `case`  = '4'
  SELECT * FROM `zt_testresult` WHERE run  = '1' ORDER BY `id` desc 
  SELECT * FROM `zt_casestep` WHERE `case`  = '4' AND  version IN ('1') ORDER BY `id` 
  SELECT t1.id,t2.build FROM `zt_testrun` AS t1  LEFT JOIN `zt_testtask` AS t2  ON t1.task=t2.id  WHERE t1.id IN ('1')
  SELECT * FROM `zt_file` WHERE (objectType = 'caseResult' or objectType = 'stepResult')  AND  objectID IN ('4') AND  extra  != 'editor' ORDER BY `id` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT COUNT(*) AS count FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case`  = '4' AND  `run`  = '1'
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'case' AND  objectID  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('89') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:28:31: /
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 

20250716 15:28:31: /index.php?m=my&f=index
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '1'
  SELECT * FROM `zt_config` WHERE module  = 'tutorial' AND  owner  = 'admin' AND  section  = 'tasks' AND  `key`  = 'setting'
  SELECT count(*) AS count FROM `zt_task` WHERE assignedTo  = 'admin' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_bug` WHERE assignedTo  = 'admin' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_story` WHERE assignedTo  = 'admin' AND  deleted  = '0' AND  type  = 'story'
  SELECT count(*) AS count FROM `zt_project` WHERE status  NOT IN ('done','closed') AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_product` WHERE status  != 'closed' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_task` WHERE assignedTo  = 'admin' AND  status IN ('wait','doing') AND  deadline  != '0000-00-00' AND  deadline  < '2025-07-16' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_bug` WHERE assignedTo  = 'admin' AND  status  = 'active' AND  deadline  != '0000-00-00' AND  deadline  < '2025-07-16' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_project` WHERE status IN ('wait','doing') AND  end  < '2025-07-16' AND  deleted  = '0'
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT *, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT id,parent,project,status,finishedDate,estimate,consumed,`left` FROM `zt_task` WHERE project IN ('2','1') AND  deleted  = '0'
  SELECT t1.project, count(t2.status) as totalStories, count(t2.status != 'closed' or null) as unclosedStories, count(t2.stage = 'released' or null) as releasedStories FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  WHERE t1.project IN ('2','1') AND  t2.deleted  = '0' GROUP BY project
  SELECT project, status, count(status) as totalBugs, count(status = 'active' or null) as activeBugs, count(resolvedDate like '2025-07-15%' or null) as yesterdayResolved FROM `zt_bug` WHERE project IN ('2','1') AND  deleted  = '0' GROUP BY project
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT id,name,short FROM `zt_module` WHERE type  = 'line' AND  deleted  = '0'
  SELECT product, stage, COUNT(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('2','1') AND  type  = 'story' GROUP BY product, stage
  SELECT product, end FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('2','1')
  SELECT t1.product, t2.status, t2.end FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('2','1') AND  t2.deleted  = '0'
  SELECT product, status, COUNT(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('2','1') GROUP BY product, status
  SELECT product, COUNT(*) AS count FROM `zt_release` WHERE date  = '2025-07-15' AND  product IN ('2','1') GROUP BY product
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE 1=1  AND  lib IN ('4','3','2','1')
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE 1  AND  date  > '2025-07-16' AND  date  < '2025-07-17' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2025-07-16' AND  date  < '2025-07-17' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE 1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') AND  cycle  = '0' ORDER BY `date`,`begin`  LIMIT 20 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT *, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  status  != 'closed' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:30:39: /
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 

20250716 15:30:39: /index.php?m=my&f=index
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '1'
  SELECT * FROM `zt_config` WHERE module  = 'tutorial' AND  owner  = 'admin' AND  section  = 'tasks' AND  `key`  = 'setting'
  SELECT count(*) AS count FROM `zt_task` WHERE assignedTo  = 'admin' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_bug` WHERE assignedTo  = 'admin' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_story` WHERE assignedTo  = 'admin' AND  deleted  = '0' AND  type  = 'story'
  SELECT count(*) AS count FROM `zt_project` WHERE status  NOT IN ('done','closed') AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_product` WHERE status  != 'closed' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_task` WHERE assignedTo  = 'admin' AND  status IN ('wait','doing') AND  deadline  != '0000-00-00' AND  deadline  < '2025-07-16' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_bug` WHERE assignedTo  = 'admin' AND  status  = 'active' AND  deadline  != '0000-00-00' AND  deadline  < '2025-07-16' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_project` WHERE status IN ('wait','doing') AND  end  < '2025-07-16' AND  deleted  = '0'
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT *, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT id,parent,project,status,finishedDate,estimate,consumed,`left` FROM `zt_task` WHERE project IN ('2','1') AND  deleted  = '0'
  SELECT t1.project, count(t2.status) as totalStories, count(t2.status != 'closed' or null) as unclosedStories, count(t2.stage = 'released' or null) as releasedStories FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  WHERE t1.project IN ('2','1') AND  t2.deleted  = '0' GROUP BY project
  SELECT project, status, count(status) as totalBugs, count(status = 'active' or null) as activeBugs, count(resolvedDate like '2025-07-15%' or null) as yesterdayResolved FROM `zt_bug` WHERE project IN ('2','1') AND  deleted  = '0' GROUP BY project
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT id,name,short FROM `zt_module` WHERE type  = 'line' AND  deleted  = '0'
  SELECT product, stage, COUNT(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('2','1') AND  type  = 'story' GROUP BY product, stage
  SELECT product, end FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('2','1')
  SELECT t1.product, t2.status, t2.end FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('2','1') AND  t2.deleted  = '0'
  SELECT product, status, COUNT(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('2','1') GROUP BY product, status
  SELECT product, COUNT(*) AS count FROM `zt_release` WHERE date  = '2025-07-15' AND  product IN ('2','1') GROUP BY product
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE 1=1  AND  lib IN ('4','3','2','1')
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE 1  AND  date  > '2025-07-16' AND  date  < '2025-07-17' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2025-07-16' AND  date  < '2025-07-17' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE 1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') AND  cycle  = '0' ORDER BY `date`,`begin`  LIMIT 20 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT *, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  status  != 'closed' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:30:40: /index.php?m=my&f=profile
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_user` WHERE `account`  = 'admin'
  SELECT t2.* FROM `zt_usergroup` AS t1  LEFT JOIN `zt_group` AS t2  ON t1.group = t2.id  WHERE t1.account  = 'admin'
  SELECT count(*) as count FROM `zt_todo` WHERE account  = 'admin'
  SELECT count(*) as count FROM `zt_story` WHERE openedBy  = 'admin' AND  type  = 'story' AND  deleted  = '0'
  SELECT count(*) as count FROM `zt_task` WHERE finishedBy  = 'admin' AND  deleted  = '0'
  SELECT count(*) as count FROM `zt_bug` WHERE resolvedBy  = 'admin' AND  deleted  = '0'
  SELECT count(*) as count FROM `zt_case` WHERE openedBy  = 'admin' AND  deleted  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:30:42: /index.php?m=product&f=index&locate=no
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '10'
  SELECT * FROM `zt_block` WHERE id  = '10'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT id,name,short FROM `zt_module` WHERE type  = 'line' AND  deleted  = '0'
  SELECT product, stage, COUNT(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('2','1') AND  type  = 'story' GROUP BY product, stage
  SELECT product, end FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('2','1')
  SELECT t1.product, t2.status, t2.end FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('2','1') AND  t2.deleted  = '0'
  SELECT product, status, COUNT(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('2','1') GROUP BY product, status
  SELECT product, COUNT(*) AS count FROM `zt_release` WHERE date  = '2025-07-15' AND  product IN ('2','1') GROUP BY product
  SELECT * FROM `zt_block` WHERE id  = '12'
  SELECT * FROM `zt_block` WHERE id  = '12'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('2','1') 
  SELECT * FROM `zt_product` WHERE id IN ('2','1') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  type  = 'story' AND  product IN ('2','1') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('2','1') AND  end  > '2025-07-16 15:30:42' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('2','1') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE deleted  = '0' AND  status  = 'active' AND  product IN ('2','1') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE deleted  = '0' AND  assignedTo  = '' AND  product IN ('2','1') GROUP BY product
  SELECT t1.product,t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('2','1') AND  t2.deleted  = '0' ORDER BY t1.`project` 
  SELECT * FROM `zt_block` WHERE id  = '11'
  SELECT * FROM `zt_block` WHERE id  = '11'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '13'
  SELECT * FROM `zt_block` WHERE id  = '13'
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  t1.type  = 'story' AND  t1.status  != 'closed' AND  assignedTo  = 'admin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  t1.type  = 'story' AND  t1.status  != 'closed' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_story` WHERE id IN ('')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:30:43: /index.php?m=qa&f=index
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '14'
  SELECT * FROM `zt_block` WHERE id  = '14'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT id,name,short FROM `zt_module` WHERE type  = 'line' AND  deleted  = '0'
  SELECT * FROM `zt_testtask` WHERE product IN ('2','1') AND  project  != '0' AND  deleted  = '0' ORDER BY `id` 
  SELECT product, count(id) as total,
            count(assignedTo = 'admin' or null) as assignedToMe,
            count(status != 'closed' or null) as unclosed,
            count((status != 'closed' and status != 'resolved') or null) as unresolved,
            count(confirmed = '0' or null) as unconfirmed,
            count((resolvedDate >= '2025-07-15' and resolvedDate < '2025-07-16') or null) as yesterdayResolved,
            count((closedDate >= '2025-07-15' and closedDate < '2025-07-16') or null) as yesterdayClosed FROM `zt_bug` WHERE product IN ('2','1') AND  deleted  = '0' GROUP BY product
  SELECT count(product) as product FROM `zt_action` WHERE objectType  = 'bug' AND  action  = 'bugconfirmed' AND  date  >= '2025-07-15' AND  date  < '2025-07-16' GROUP BY product
  SELECT * FROM `zt_block` WHERE id  = '17'
  SELECT * FROM `zt_block` WHERE id  = '17'
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 
  SELECT * FROM `zt_block` WHERE id  = '15'
  SELECT * FROM `zt_block` WHERE id  = '15'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  status  != 'closed' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_block` WHERE id  = '16'
  SELECT * FROM `zt_block` WHERE id  = '16'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:30:46: /index.php?m=message&f=ajaxGetMessage&t=html&windowBlur=0
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_notify` WHERE objectType  = 'message' AND  toList  = 'admin' AND  status  = 'wait'
  SELECT * FROM `zt_todo` WHERE 1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  date  >= '20250716' AND  date  <= '20250716' AND  status IN ('wait') AND  cycle  = '0' ORDER BY `date`,`status`,`begin` 

20250716 15:30:47: /index.php?m=testtask&f=browse&productID=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT COUNT(*) AS recTotal FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project and t1.product = t5.product  WHERE t1.deleted  = '0' AND  t1.auto  != 'unit' AND  t1.project IN ('0','1','2') AND  t1.product  = '1' AND  t1.status IN ('blocked','doing','wait','done') 
  SELECT t1.*, t2.name AS productName, t3.name AS projectName, t4.name AS buildName, if(t4.name != '', t4.branch, t5.branch) AS branch FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project and t1.product = t5.product  WHERE t1.deleted  = '0' AND  t1.auto  != 'unit' AND  t1.project IN ('0','1','2') AND  t1.product  = '1' AND  t1.status IN ('blocked','doing','wait','done') ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:30:50: /index.php?m=testtask&f=cases&taskID=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_testtask` WHERE id  = '1'
  SELECT name,type FROM `zt_product` WHERE id  = '1'
  SELECT name FROM `zt_project` WHERE id  = '1'
  SELECT branch FROM `zt_projectproduct` WHERE project  = '1' AND  product  = '1'
  SELECT branch,name FROM `zt_build` WHERE id  = 'trunk'
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT t1.*, t2.name AS productName, t3.name AS projectName, t4.name AS buildName, if(t4.name != '', t4.branch, t5.branch) AS branch FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project and t1.product = t5.product  WHERE t1.deleted  = '0' AND  t1.auto  != 'unit' AND  t1.project IN ('0','1','2') AND  t1.product  = '1' AND  t1.status IN ('blocked','doing','wait','done') ORDER BY `id` desc 
  SELECT * FROM `zt_project` WHERE `id` = '1' 
  SELECT 
            ROUND(SUM(estimate), 2) AS totalEstimate,
            ROUND(SUM(consumed), 2) AS totalConsumed,
            ROUND(SUM(`left`), 2) AS totalLeft FROM `zt_task` WHERE project  = '1' AND  deleted  = '0' AND  parent  < '1'
  SELECT ROUND(SUM(`left`), 2) AS totalLeft FROM `zt_task` WHERE project  = '1' AND  deleted  = '0' AND  parent  < '1' AND  status IN ('closed','cancel')
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE root  = '1' AND  type  = 'project'
  SELECT account, realname, deleted, INSTR(',qd,qa,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT COUNT(*) AS recTotal FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_story` AS t3  ON t2.story = t3.id  WHERE t1.task  = '1' AND  t2.deleted  = '0' 
  SELECT t2.*,t1.*,t2.version as caseVersion,t3.title as storyTitle,t2.status as caseStatus FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_story` AS t3  ON t2.story = t3.id  WHERE t1.task  = '1' AND  t2.deleted  = '0' ORDER BY t2.`id` desc,t2.`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '1'
  SELECT id,name FROM `zt_testsuite` WHERE product  = '0' AND  deleted  = '0' AND  type  = 'library' ORDER BY `id` desc 
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `result` IN ('1','2','3','4') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `run` IN ('1','2','3','4') GROUP BY `run`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `run` IN ('1','2','3','4') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_testrun` AS t2  ON t1.`case`=t2.`case`  WHERE t2.`id` IN ('1','2','3','4') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT account, realname, deleted, INSTR(',qd,qa,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '1'
  SELECT * FROM `zt_branch` WHERE product  = '1' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:31:00: /index.php?m=testtask&f=cases&taskID=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_testtask` WHERE id  = '1'
  SELECT name,type FROM `zt_product` WHERE id  = '1'
  SELECT name FROM `zt_project` WHERE id  = '1'
  SELECT branch FROM `zt_projectproduct` WHERE project  = '1' AND  product  = '1'
  SELECT branch,name FROM `zt_build` WHERE id  = 'trunk'
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT t1.*, t2.name AS productName, t3.name AS projectName, t4.name AS buildName, if(t4.name != '', t4.branch, t5.branch) AS branch FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project and t1.product = t5.product  WHERE t1.deleted  = '0' AND  t1.auto  != 'unit' AND  t1.project IN ('0','1','2') AND  t1.product  = '1' AND  t1.status IN ('blocked','doing','wait','done') ORDER BY `id` desc 
  SELECT * FROM `zt_project` WHERE `id` = '1' 
  SELECT 
            ROUND(SUM(estimate), 2) AS totalEstimate,
            ROUND(SUM(consumed), 2) AS totalConsumed,
            ROUND(SUM(`left`), 2) AS totalLeft FROM `zt_task` WHERE project  = '1' AND  deleted  = '0' AND  parent  < '1'
  SELECT ROUND(SUM(`left`), 2) AS totalLeft FROM `zt_task` WHERE project  = '1' AND  deleted  = '0' AND  parent  < '1' AND  status IN ('closed','cancel')
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE root  = '1' AND  type  = 'project'
  SELECT account, realname, deleted, INSTR(',qd,qa,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT COUNT(*) AS recTotal FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_story` AS t3  ON t2.story = t3.id  WHERE t1.task  = '1' AND  t2.deleted  = '0' 
  SELECT t2.*,t1.*,t2.version as caseVersion,t3.title as storyTitle,t2.status as caseStatus FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_story` AS t3  ON t2.story = t3.id  WHERE t1.task  = '1' AND  t2.deleted  = '0' ORDER BY t2.`id` desc,t2.`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '1'
  SELECT id,name FROM `zt_testsuite` WHERE product  = '0' AND  deleted  = '0' AND  type  = 'library' ORDER BY `id` desc 
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `result` IN ('1','2','3','4') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `run` IN ('1','2','3','4') GROUP BY `run`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `run` IN ('1','2','3','4') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_testrun` AS t2  ON t1.`case`=t2.`case`  WHERE t2.`id` IN ('1','2','3','4') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT account, realname, deleted, INSTR(',qd,qa,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT createdVersion FROM `zt_product` WHERE id  = '1'
  SELECT * FROM `zt_branch` WHERE product  = '1' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:31:02: /index.php?m=testcase&f=view&caseID=4&version=1&from=testtask&taskID=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '4' 
  SELECT title, status, version FROM `zt_story` WHERE `id` = '3' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '4'
  SELECT * FROM `zt_casestep` WHERE `case`  = '4' AND  version  = '1' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '4' AND  extra  != 'editor' AND  deleted  = '0'
  SELECT * FROM `zt_testrun` WHERE task  = '1' AND  `case`  = '4'
  SELECT * FROM `zt_testresult` WHERE run  = '1' ORDER BY `id` desc 
  SELECT * FROM `zt_casestep` WHERE `case`  = '4' AND  version IN ('1') ORDER BY `id` 
  SELECT t1.id,t2.build FROM `zt_testrun` AS t1  LEFT JOIN `zt_testtask` AS t2  ON t1.task=t2.id  WHERE t1.id IN ('1')
  SELECT * FROM `zt_file` WHERE (objectType = 'caseResult' or objectType = 'stepResult')  AND  objectID IN ('4') AND  extra  != 'editor' ORDER BY `id` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT COUNT(*) AS count FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case`  = '4' AND  `run`  = '1'
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'case' AND  objectID  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('89') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:31:08: /index.php?m=testtask&f=view&taskID=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_testtask` WHERE id  = '1'
  SELECT name,type FROM `zt_product` WHERE id  = '1'
  SELECT name FROM `zt_project` WHERE id  = '1'
  SELECT branch FROM `zt_projectproduct` WHERE project  = '1' AND  product  = '1'
  SELECT branch,name FROM `zt_build` WHERE id  = 'trunk'
  SELECT t1.*, t2.name as projectName, t3.name as productName, t3.type as productType FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.id  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT t1.*, t2.name AS productName, t3.name AS projectName, t4.name AS buildName, if(t4.name != '', t4.branch, t5.branch) AS branch FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project and t1.product = t5.product  WHERE t1.deleted  = '0' AND  t1.auto  != 'unit' AND  t1.project IN ('0','1','2') AND  t1.product  = '1' AND  t1.status IN ('blocked','doing','wait','done') ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'testtask' AND  objectID  = '1' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('92','93') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:32:16: /index.php?m=qa&f=index
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '14'
  SELECT * FROM `zt_block` WHERE id  = '14'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT id,name,short FROM `zt_module` WHERE type  = 'line' AND  deleted  = '0'
  SELECT * FROM `zt_testtask` WHERE product IN ('2','1') AND  project  != '0' AND  deleted  = '0' ORDER BY `id` 
  SELECT product, count(id) as total,
            count(assignedTo = 'admin' or null) as assignedToMe,
            count(status != 'closed' or null) as unclosed,
            count((status != 'closed' and status != 'resolved') or null) as unresolved,
            count(confirmed = '0' or null) as unconfirmed,
            count((resolvedDate >= '2025-07-15' and resolvedDate < '2025-07-16') or null) as yesterdayResolved,
            count((closedDate >= '2025-07-15' and closedDate < '2025-07-16') or null) as yesterdayClosed FROM `zt_bug` WHERE product IN ('2','1') AND  deleted  = '0' GROUP BY product
  SELECT count(product) as product FROM `zt_action` WHERE objectType  = 'bug' AND  action  = 'bugconfirmed' AND  date  >= '2025-07-15' AND  date  < '2025-07-16' GROUP BY product
  SELECT * FROM `zt_block` WHERE id  = '17'
  SELECT * FROM `zt_block` WHERE id  = '17'
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 
  SELECT * FROM `zt_block` WHERE id  = '15'
  SELECT * FROM `zt_block` WHERE id  = '15'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  status  != 'closed' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_block` WHERE id  = '16'
  SELECT * FROM `zt_block` WHERE id  = '16'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:53:23: /
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 

20250716 15:53:23: /index.php?m=my&f=index
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '1'
  SELECT * FROM `zt_config` WHERE module  = 'tutorial' AND  owner  = 'admin' AND  section  = 'tasks' AND  `key`  = 'setting'
  SELECT count(*) AS count FROM `zt_task` WHERE assignedTo  = 'admin' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_bug` WHERE assignedTo  = 'admin' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_story` WHERE assignedTo  = 'admin' AND  deleted  = '0' AND  type  = 'story'
  SELECT count(*) AS count FROM `zt_project` WHERE status  NOT IN ('done','closed') AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_product` WHERE status  != 'closed' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_task` WHERE assignedTo  = 'admin' AND  status IN ('wait','doing') AND  deadline  != '0000-00-00' AND  deadline  < '2025-07-16' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_bug` WHERE assignedTo  = 'admin' AND  status  = 'active' AND  deadline  != '0000-00-00' AND  deadline  < '2025-07-16' AND  deleted  = '0'
  SELECT count(*) AS count FROM `zt_project` WHERE status IN ('wait','doing') AND  end  < '2025-07-16' AND  deleted  = '0'
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT *, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT id,parent,project,status,finishedDate,estimate,consumed,`left` FROM `zt_task` WHERE project IN ('2','1') AND  deleted  = '0'
  SELECT t1.project, count(t2.status) as totalStories, count(t2.status != 'closed' or null) as unclosedStories, count(t2.stage = 'released' or null) as releasedStories FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  WHERE t1.project IN ('2','1') AND  t2.deleted  = '0' GROUP BY project
  SELECT project, status, count(status) as totalBugs, count(status = 'active' or null) as activeBugs, count(resolvedDate like '2025-07-15%' or null) as yesterdayResolved FROM `zt_bug` WHERE project IN ('2','1') AND  deleted  = '0' GROUP BY project
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT id,name,short FROM `zt_module` WHERE type  = 'line' AND  deleted  = '0'
  SELECT product, stage, COUNT(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('2','1') AND  type  = 'story' GROUP BY product, stage
  SELECT product, end FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('2','1')
  SELECT t1.product, t2.status, t2.end FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('2','1') AND  t2.deleted  = '0'
  SELECT product, status, COUNT(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('2','1') GROUP BY product, status
  SELECT product, COUNT(*) AS count FROM `zt_release` WHERE date  = '2025-07-15' AND  product IN ('2','1') GROUP BY product
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE 1=1  AND  lib IN ('4','3','2','1')
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE 1  AND  date  > '2025-07-16' AND  date  < '2025-07-17' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2025-07-16' AND  date  < '2025-07-17' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE 1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') AND  cycle  = '0' ORDER BY `date`,`begin`  LIMIT 20 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT *, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT * FROM `zt_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  status  != 'closed' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:53:52: /index.php?m=qa&f=index
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '14'
  SELECT * FROM `zt_block` WHERE id  = '14'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT id,name,short FROM `zt_module` WHERE type  = 'line' AND  deleted  = '0'
  SELECT * FROM `zt_testtask` WHERE product IN ('2','1') AND  project  != '0' AND  deleted  = '0' ORDER BY `id` 
  SELECT product, count(id) as total,
            count(assignedTo = 'admin' or null) as assignedToMe,
            count(status != 'closed' or null) as unclosed,
            count((status != 'closed' and status != 'resolved') or null) as unresolved,
            count(confirmed = '0' or null) as unconfirmed,
            count((resolvedDate >= '2025-07-15' and resolvedDate < '2025-07-16') or null) as yesterdayResolved,
            count((closedDate >= '2025-07-15' and closedDate < '2025-07-16') or null) as yesterdayClosed FROM `zt_bug` WHERE product IN ('2','1') AND  deleted  = '0' GROUP BY product
  SELECT count(product) as product FROM `zt_action` WHERE objectType  = 'bug' AND  action  = 'bugconfirmed' AND  date  >= '2025-07-15' AND  date  < '2025-07-16' GROUP BY product
  SELECT * FROM `zt_block` WHERE id  = '17'
  SELECT * FROM `zt_block` WHERE id  = '17'
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 
  SELECT * FROM `zt_block` WHERE id  = '15'
  SELECT * FROM `zt_block` WHERE id  = '15'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  status  != 'closed' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_block` WHERE id  = '16'
  SELECT * FROM `zt_block` WHERE id  = '16'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:53:54: /index.php?m=testtask&f=browse&productID=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT COUNT(*) AS recTotal FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project and t1.product = t5.product  WHERE t1.deleted  = '0' AND  t1.auto  != 'unit' AND  t1.project IN ('0','1','2') AND  t1.product  = '1' AND  t1.status IN ('blocked','doing','wait','done') 
  SELECT t1.*, t2.name AS productName, t3.name AS projectName, t4.name AS buildName, if(t4.name != '', t4.branch, t5.branch) AS branch FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project and t1.product = t5.product  WHERE t1.deleted  = '0' AND  t1.auto  != 'unit' AND  t1.project IN ('0','1','2') AND  t1.product  = '1' AND  t1.status IN ('blocked','doing','wait','done') ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:53:57: /index.php?m=testreport&f=browse&productID=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT COUNT(*) AS recTotal FROM `zt_testreport` WHERE deleted  = '0' AND  product  = '1' 
  SELECT * FROM `zt_testreport` WHERE deleted  = '0' AND  product  = '1' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20250716 15:53:59: /index.php?m=testreport&f=create&objectID=0&objectType=testtask&productID=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT t1.*, t2.name AS productName, t3.name AS projectName, t4.name AS buildName, if(t4.name != '', t4.branch, t5.branch) AS branch FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project and t1.product = t5.product  WHERE t1.deleted  = '0' AND  t1.auto  != 'unit' AND  t1.project IN ('0','1','2') AND  t1.product  = '1' AND  t1.status IN ('blocked','doing','wait','done') ORDER BY `id` desc 

20250716 15:58:58: /index.php?m=message&f=ajaxGetMessage&t=html&windowBlur=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_notify` WHERE objectType  = 'message' AND  toList  = 'admin' AND  status  = 'wait'
  SELECT * FROM `zt_todo` WHERE 1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  date  >= '20250716' AND  date  <= '20250716' AND  status IN ('wait') AND  cycle  = '0' ORDER BY `date`,`status`,`begin` 

20250716 16:03:58: /index.php?m=message&f=ajaxGetMessage&t=html&windowBlur=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_notify` WHERE objectType  = 'message' AND  toList  = 'admin' AND  status  = 'wait'
  SELECT * FROM `zt_todo` WHERE 1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  date  >= '20250716' AND  date  <= '20250716' AND  status IN ('wait') AND  cycle  = '0' ORDER BY `date`,`status`,`begin` 

20250716 16:08:58: /index.php?m=message&f=ajaxGetMessage&t=html&windowBlur=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_notify` WHERE objectType  = 'message' AND  toList  = 'admin' AND  status  = 'wait'
  SELECT * FROM `zt_todo` WHERE 1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  date  >= '20250716' AND  date  <= '20250716' AND  status IN ('wait') AND  cycle  = '0' ORDER BY `date`,`status`,`begin` 

20250716 16:13:58: /index.php?m=message&f=ajaxGetMessage&t=html&windowBlur=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_notify` WHERE objectType  = 'message' AND  toList  = 'admin' AND  status  = 'wait'
  SELECT * FROM `zt_todo` WHERE 1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  date  >= '20250716' AND  date  <= '20250716' AND  status IN ('wait') AND  cycle  = '0' ORDER BY `date`,`status`,`begin` 

20250716 16:18:58: /index.php?m=message&f=ajaxGetMessage&t=html&windowBlur=1
  SELECT * FROM `zt_userview` WHERE account  = 'admin'
  SELECT id FROM `zt_product` WHERE acl  = 'open'
  SELECT id FROM `zt_project` WHERE acl  = 'open'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('xuanxuan')
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_notify` WHERE objectType  = 'message' AND  toList  = 'admin' AND  status  = 'wait'
  SELECT * FROM `zt_todo` WHERE 1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  date  >= '20250716' AND  date  <= '20250716' AND  status IN ('wait') AND  cycle  = '0' ORDER BY `date`,`status`,`begin` 

