INSERT INTO `RBAC_PERMISSIONS` VALUES
('00000000000000000000000000000001','PM_LOGIN','2007-08-03 12:24:36','2007-08-03 12:24:36',1,'00000000000000000000000000000002'),
('00000000000000000000000000000002','PM_SETUP','2007-08-03 12:24:36','2007-08-03 12:24:36',1,'00000000000000000000000000000002'),
('00000000000000000000000000000003','PM_USERS','2007-08-03 12:24:36','2007-08-03 12:24:36',1,'00000000000000000000000000000002'),
('00000000000000000000000000000004','PM_FACTORY','2007-08-03 12:24:36','2007-08-03 12:24:36',1,'00000000000000000000000000000002'),
('00000000000000000000000000000005','PM_CASES','2007-08-03 12:24:36','2007-08-03 12:24:36',1,'00000000000000000000000000000002'),
('00000000000000000000000000000006','PM_ALLCASES','2008-04-30 00:00:00','2008-04-30 00:00:00',1,'00000000000000000000000000000002'),
('00000000000000000000000000000008','PM_REPORTS','2008-05-12 00:00:00','2008-05-12 00:00:00',0,'00000000000000000000000000000002'),
('00000000000000000000000000000007','PM_REASSIGNCASE','2008-05-02 18:16:29','2008-05-02 18:16:29',1,'00000000000000000000000000000002'),
('00000000000000000000000000000009','PM_SUPERVISOR','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'00000000000000000000000000000002'),
('00000000000000000000000000000010','PM_SETUP_ADVANCE','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'00000000000000000000000000000002'),
('00000000000000000000000000000011','PM_DASHBOARD','2009-02-18 00:00:00','2009-02-18 00:00:00',1,'00000000000000000000000000000002'),
('00000000000000000000000000000012','PM_WEBDAV','2009-08-21 00:00:00','2009-08-21 00:00:00',1,'00000000000000000000000000000002'),
('00000000000000000000000000000013','PM_DELETECASE','2009-10-12 00:00:00','0000-00-00 00:00:00',0,'00000000000000000000000000000002'),
('00000000000000000000000000000014','PM_EDITPERSONALINFO','2009-10-12 00:00:00','0000-00-00 00:00:00',1,'00000000000000000000000000000002'),
('00000000000000000000000000000015','PM_FOLDERS_VIEW','2009-10-12 00:00:00','0000-00-00 00:00:00',1,'00000000000000000000000000000002'),
('00000000000000000000000000000016','PM_FOLDERS_ADD_FOLDER','2009-10-12 00:00:00','0000-00-00 00:00:00',1,'00000000000000000000000000000002'),
('00000000000000000000000000000017','PM_FOLDERS_ADD_FILE','2009-10-12 00:00:00','0000-00-00 00:00:00',1,'00000000000000000000000000000002'),
('00000000000000000000000000000018','PM_CANCELCASE','2011-12-11 00:00:00','2011-12-11 00:00:00',1,'00000000000000000000000000000002'),
('00000000000000000000000000000019','PM_FOLDER_DELETE','2011-12-11 00:00:00','2011-12-11 00:00:00',1,'00000000000000000000000000000002');

INSERT INTO `RBAC_ROLES` VALUES
('00000000000000000000000000000001','','00000000000000000000000000000001','RBAC_ADMIN','2007-07-31 19:10:22','2007-08-03 12:24:36',1),
('00000000000000000000000000000002','','00000000000000000000000000000002','PROCESSMAKER_ADMIN','2007-07-31 19:10:22','2007-08-03 12:24:36',1),
('00000000000000000000000000000003','','00000000000000000000000000000002','PROCESSMAKER_OPERATOR','2007-07-31 19:10:22','2007-08-03 12:24:36',1),
('00000000000000000000000000000004', '', '00000000000000000000000000000002', 'PROCESSMAKER_MANAGER', '2010-03-29 09:14:15', '2010-03-29 09:19:53', 1);


INSERT INTO `RBAC_ROLES_PERMISSIONS` VALUES
('00000000000000000000000000000002','00000000000000000000000000000001'),
('00000000000000000000000000000002','00000000000000000000000000000002'),
('00000000000000000000000000000002','00000000000000000000000000000003'),
('00000000000000000000000000000002','00000000000000000000000000000004'),
('00000000000000000000000000000002','00000000000000000000000000000005'),
('00000000000000000000000000000002','00000000000000000000000000000006'),
('00000000000000000000000000000002','00000000000000000000000000000007'),
('00000000000000000000000000000002','00000000000000000000000000000008'),
('00000000000000000000000000000002','00000000000000000000000000000009'),
('00000000000000000000000000000002','00000000000000000000000000000010'),
('00000000000000000000000000000002','00000000000000000000000000000011'),
('00000000000000000000000000000002','00000000000000000000000000000012'),
('00000000000000000000000000000002','00000000000000000000000000000013'),
('00000000000000000000000000000002','00000000000000000000000000000014'),
('00000000000000000000000000000002','00000000000000000000000000000015'),
('00000000000000000000000000000002','00000000000000000000000000000016'),
('00000000000000000000000000000002','00000000000000000000000000000017'),
('00000000000000000000000000000002','00000000000000000000000000000018'),
('00000000000000000000000000000002','00000000000000000000000000000019'),
('00000000000000000000000000000003','00000000000000000000000000000001'),
('00000000000000000000000000000003','00000000000000000000000000000005'),
('00000000000000000000000000000004', '00000000000000000000000000000001'),
('00000000000000000000000000000004', '00000000000000000000000000000003'),
('00000000000000000000000000000004', '00000000000000000000000000000005'),
('00000000000000000000000000000004', '00000000000000000000000000000006'),
('00000000000000000000000000000004', '00000000000000000000000000000007'),
('00000000000000000000000000000004', '00000000000000000000000000000008'),
('00000000000000000000000000000004', '00000000000000000000000000000009'),
('00000000000000000000000000000004', '00000000000000000000000000000011'),
('00000000000000000000000000000004', '00000000000000000000000000000013'),
('00000000000000000000000000000004', '00000000000000000000000000000014'),
('00000000000000000000000000000004', '00000000000000000000000000000015'),
('00000000000000000000000000000004', '00000000000000000000000000000016'),
('00000000000000000000000000000004', '00000000000000000000000000000017'),
('00000000000000000000000000000004', '00000000000000000000000000000018'),
('00000000000000000000000000000004', '00000000000000000000000000000019');

INSERT INTO `RBAC_SYSTEMS` VALUES ('00000000000000000000000000000001','RBAC','2007-07-31 19:10:22','2007-08-03 12:24:36',1),('00000000000000000000000000000002','PROCESSMAKER','2007-07-31 19:10:22','2007-08-03 12:24:36',1);
INSERT INTO `RBAC_USERS` VALUES ('00000000000000000000000000000001','admin','21232f297a57a5a743894a0e4a801fc3','Administrator','','admin@processmaker.com','2020-01-01','2007-08-03 12:24:36','2008-02-13 07:24:07',1,'MYSQL','00000000000000000000000000000000','','');
INSERT INTO `RBAC_USERS_ROLES` VALUES ('00000000000000000000000000000001','00000000000000000000000000000002');