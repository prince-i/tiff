

CREATE TABLE `formset` (
  `ID` int(14) NOT NULL AUTO_INCREMENT,
  `PROJECT_CODE` varchar(200) DEFAULT NULL,
  `FIELD_ID` varchar(200) DEFAULT NULL,
  `FIELD_NAME` varchar(200) NOT NULL,
  `FIELD_POSITION` varchar(4) DEFAULT NULL,
  `FIELD_LENGTH` varchar(10) DEFAULT NULL,
  `FORM_ID` varchar(10) NOT NULL,
  `IS_SCROLLING` varchar(1) DEFAULT NULL,
  `IS_ENABLED` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4;

INSERT INTO `formset` VALUES("5","KOF-FRE","DOCNUM","DOCNUM","1","8","1","0","1");
INSERT INTO `formset` VALUES("6","KOF-FRE","DOCTYPE","DOCTYPE","9","3","1","0","1");
INSERT INTO `formset` VALUES("7","KOF-FRE","DIQ","DIQ","12","1","1","0","1");
INSERT INTO `formset` VALUES("8","KOF-FRE","RDATE","RDATE","13","8","1","0","1");
INSERT INTO `formset` VALUES("9","KOF-FRE","DDATE","DDATE","21","8","1","0","1");
INSERT INTO `formset` VALUES("10","KOF-FRE","AMT","AMT","29","13","1","0","1");
INSERT INTO `formset` VALUES("11","KOF-FRE","REF","REF","42","15","1","0","1");
INSERT INTO `formset` VALUES("12","KOF-FRE","CASENO","CASENO","57","20","1","0","1");
INSERT INTO `formset` VALUES("13","KOF-FRE","COURT","COURT","77","20","1","0","1");
INSERT INTO `formset` VALUES("14","KOF-FRE","EDATEM","EDATEM","97","2","1","0","1");
INSERT INTO `formset` VALUES("15","KOF-FRE","EDATED","EDATED","99","2","1","0","1");
INSERT INTO `formset` VALUES("16","KOF-FRE","EDATEY","EDATEY","101","2","1","0","1");
INSERT INTO `formset` VALUES("17","KOF-FRE","EUSERID","EUSERID","103","3","1","0","1");
INSERT INTO `formset` VALUES("18","KOF-FRE","VDATEM","VDATEM","106","2","1","0","1");
INSERT INTO `formset` VALUES("19","KOF-FRE","VDATED","VDATED","108","2","1","0","1");
INSERT INTO `formset` VALUES("20","KOF-FRE","VDATEY","VDATEY","110","2","1","0","1");
INSERT INTO `formset` VALUES("21","KOF-FRE","VUSERID","VUSERID","112","3","1","0","1");
INSERT INTO `formset` VALUES("22","KOF-FRE","BNAME","BNAME","136","8","1","0","1");
INSERT INTO `formset` VALUES("23","KOF-FRE","DCOUNT","DCOUNT","144","3","1","0","1");
INSERT INTO `formset` VALUES("24","KOF-FRE","DCODE","DCODE","148","4","1","0","1");
INSERT INTO `formset` VALUES("25","KOF-FRE","DDESC1","DDESC1","152","60","1","0","1");
INSERT INTO `formset` VALUES("26","KOF-FRE","DDESC2","DDESC2","212","70","1","0","1");
INSERT INTO `formset` VALUES("27","KOF-FRE","PROP","PROP","282","1","1","0","1");
INSERT INTO `formset` VALUES("28","KOF-FRE","TOR2","TOR2","283","70","1","0","1");
INSERT INTO `formset` VALUES("29","KOF-FRE","TOR3","TOR3","353","70","1","0","1");
INSERT INTO `formset` VALUES("30","KOF-FRE","TOR1","TOR1","423","60","1","0","1");
INSERT INTO `formset` VALUES("31","KOF-FRE","TEE1","TEE1","483","60","1","0","1");
INSERT INTO `formset` VALUES("32","KOF-FRE","TEE2","TEE2","543","70","1","0","1");
INSERT INTO `formset` VALUES("33","KOF-FRE","TEE3","TEE3","613","70","1","0","1");
INSERT INTO `formset` VALUES("34","KOF-FRE","MAMT","MAMT","683","1","1","0","1");
INSERT INTO `formset` VALUES("35","KOF-FRE","MREF","MREF","684","1","1","0","1");
INSERT INTO `formset` VALUES("36","KOF-FRE","COMM1","COMM1","685","60","1","0","1");
INSERT INTO `formset` VALUES("37","KOF-FRE","COMM2","COMM2","745","70","1","0","1");
INSERT INTO `formset` VALUES("38","KOF-FRE","COMM3","COMM3","815","70","1","0","1");
INSERT INTO `formset` VALUES("39","KOF-FRE","COMM4","COMM4","885","70","1","0","1");
INSERT INTO `formset` VALUES("40","KOF-FRE","COMM5","COMM5","955","70","1","0","1");
INSERT INTO `formset` VALUES("41","KOF-FRE","TOR4","TOR4","1025","70","1","0","1");
INSERT INTO `formset` VALUES("42","KOF-FRE","TOR5","TOR5","1095","70","1","0","1");
INSERT INTO `formset` VALUES("43","KOF-FRE","TEE4","TEE4","1165","70","1","0","1");
INSERT INTO `formset` VALUES("44","KOF-FRE","TEE5","TEE5","1235","70","1","0","1");
INSERT INTO `formset` VALUES("45","KOF-FRE","DDESC1","DDESC1","1","60","2","0","1");
INSERT INTO `formset` VALUES("46","KOF-FRE","DCODE","DCODE","61","4","2","0","1");
INSERT INTO `formset` VALUES("47","KOF-FRE","DDESC2","DDESC2","65","70","2","0","1");
INSERT INTO `formset` VALUES("48","KOF-FRE","PROP","PROP","135","1","2","0","1");
INSERT INTO `formset` VALUES("49","KOF-FRE","TOR2","TOR2","136","70","2","0","1");
INSERT INTO `formset` VALUES("50","KOF-FRE","TOR3","TOR3","206","70","2","0","1");
INSERT INTO `formset` VALUES("51","KOF-FRE","TOR1","TOR1","276","60","2","0","1");
INSERT INTO `formset` VALUES("52","KOF-FRE","TEE1","TEE1","336","60","2","0","1");
INSERT INTO `formset` VALUES("53","KOF-FRE","TEE2","TEE2","396","70","2","0","1");
INSERT INTO `formset` VALUES("54","KOF-FRE","TEE3","TEE3","466","70","2","0","1");
INSERT INTO `formset` VALUES("55","KOF-FRE","MAMT","MAMT","536","1","2","0","1");
INSERT INTO `formset` VALUES("56","KOF-FRE","MREF","MREF","537","1","2","0","1");
INSERT INTO `formset` VALUES("57","KOF-FRE","COMM1","COMM1","538","60","2","0","1");
INSERT INTO `formset` VALUES("58","KOF-FRE","COMM2","COMM2","598","70","2","0","1");
INSERT INTO `formset` VALUES("59","KOF-FRE","COMM3","COMM3","668","70","2","0","1");
INSERT INTO `formset` VALUES("60","KOF-FRE","IMGFN","IMGFN","738","21","2","0","1");
INSERT INTO `formset` VALUES("61","KOF-FRE","COMM4","COMM4","759","70","2","0","1");
INSERT INTO `formset` VALUES("62","KOF-FRE","COMM5","COMM5","829","70","2","0","1");
INSERT INTO `formset` VALUES("63","KOF-FRE","TOR4","TOR4","899","70","2","0","1");
INSERT INTO `formset` VALUES("64","KOF-FRE","TOR5","TOR5","969","70","2","0","1");
INSERT INTO `formset` VALUES("65","KOF-FRE","TEE4","TEE4","1039","70","2","0","1");
INSERT INTO `formset` VALUES("66","KOF-FRE","TEE5","TEE5","1109","70","2","0","1");
INSERT INTO `formset` VALUES("67","KOF-FRE","NTYPEID","NTYPEID","1179","1","2","0","1");
INSERT INTO `formset` VALUES("68","KOF-FRE","AKEY","AKEY","1180","3","2","0","1");
INSERT INTO `formset` VALUES("69","KOF-FRE","LCODE","LCODE","1183","5","2","0","1");
INSERT INTO `formset` VALUES("70","KOF-FRE","GRANTOR","GRANTOR","1188","60","2","0","1");
INSERT INTO `formset` VALUES("71","KOF-FRE","DDESC1","DDESC1","1","60","3","0","1");
INSERT INTO `formset` VALUES("72","KOF-FRE","DCODE","DCODE","61","4","3","0","1");
INSERT INTO `formset` VALUES("73","KOF-FRE","DDESC2","DDESC2","65","70","3","0","1");
INSERT INTO `formset` VALUES("74","KOF-FRE","PROP","PROP","135","1","3","0","1");
INSERT INTO `formset` VALUES("75","KOF-FRE","TOR2","TOR2","136","70","3","0","1");
INSERT INTO `formset` VALUES("76","KOF-FRE","TOR3","TOR3","206","70","3","0","1");
INSERT INTO `formset` VALUES("77","KOF-FRE","TOR1","TOR1","276","60","3","0","1");
INSERT INTO `formset` VALUES("78","KOF-FRE","TEE1","TEE1","336","60","3","0","1");
INSERT INTO `formset` VALUES("79","KOF-FRE","TEE2","TEE2","396","70","3","0","1");
INSERT INTO `formset` VALUES("80","KOF-FRE","TEE3","TEE3","466","70","3","0","1");
INSERT INTO `formset` VALUES("81","KOF-FRE","MAMT","MAMT","536","1","3","0","1");
INSERT INTO `formset` VALUES("82","KOF-FRE","MREF","MREF","537","1","3","0","1");
INSERT INTO `formset` VALUES("83","KOF-FRE","COMM1","COMM1","538","60","3","0","1");
INSERT INTO `formset` VALUES("84","KOF-FRE","COMM2","COMM2","598","70","3","0","1");
INSERT INTO `formset` VALUES("85","KOF-FRE","COMM3","COMM3","668","70","3","0","1");
INSERT INTO `formset` VALUES("86","KOF-FRE","IMGFN","IMGFN","738","21","3","0","1");
INSERT INTO `formset` VALUES("87","KOF-FRE","COMM4","COMM4","759","70","3","0","1");
INSERT INTO `formset` VALUES("88","KOF-FRE","COMM5","COMM5","829","70","3","0","1");
INSERT INTO `formset` VALUES("89","KOF-FRE","TOR4","TOR4","899","70","3","0","1");
INSERT INTO `formset` VALUES("90","KOF-FRE","TOR5","TOR5","969","70","3","0","1");
INSERT INTO `formset` VALUES("91","KOF-FRE","TEE4","TEE4","1039","70","3","0","1");
INSERT INTO `formset` VALUES("92","KOF-FRE","TEE5","TEE5","1109","70","3","0","1");
INSERT INTO `formset` VALUES("93","KOF-FRE","NTYPEID","NTYPEID","1179","1","3","0","1");
INSERT INTO `formset` VALUES("94","KOF-FRE","AKEY","AKEY","1180","3","3","0","1");
INSERT INTO `formset` VALUES("95","KOF-FRE","LCODE","LCODE","1183","5","3","0","1");
INSERT INTO `formset` VALUES("96","KOF-FRE","GRANTEE","GRANTEE","1188","60","3","0","1");
INSERT INTO `formset` VALUES("98","KOF-FRE","DCODE","DCODE","22","4","4","0","1");
INSERT INTO `formset` VALUES("99","KOF-FRE","PROP","PROP","26","1","4","0","1");
INSERT INTO `formset` VALUES("100","KOF-FRE","MAMT","MAMT","27","1","4","0","1");
INSERT INTO `formset` VALUES("101","KOF-FRE","MREF","MREF","28","1","4","0","1");
INSERT INTO `formset` VALUES("102","KOF-FRE","LLOT","LLOT","29","8","4","0","1");
INSERT INTO `formset` VALUES("103","KOF-FRE","HLOT","HLOT","37","8","4","0","1");
INSERT INTO `formset` VALUES("104","KOF-FRE","BLOCK","BLOCK","45","8","4","0","1");
INSERT INTO `formset` VALUES("105","KOF-FRE","SUBNAME","SUBNAME","53","35","4","0","1");
INSERT INTO `formset` VALUES("106","KOF-FRE","NF","NF","88","1","4","0","1");
INSERT INTO `formset` VALUES("108","KOF-FRE","DCODE","DCODE","22","4","5","0","1");
INSERT INTO `formset` VALUES("109","KOF-FRE","PROP","PROP","26","1","5","0","1");
INSERT INTO `formset` VALUES("110","KOF-FRE","MAMT","MAMT","27","1","5","0","1");
INSERT INTO `formset` VALUES("111","KOF-FRE","MREF","MREF","28","1","5","0","1");
INSERT INTO `formset` VALUES("112","KOF-FRE","SNAME","SNAME","29","35","5","0","1");
INSERT INTO `formset` VALUES("113","KOF-FRE","ABSNUM","ABSNUM","64","5","5","0","1");
INSERT INTO `formset` VALUES("114","KOF-FRE","PART","PART","69","2","5","0","1");
INSERT INTO `formset` VALUES("115","KOF-FRE","ACRES","ACRES","71","15","5","0","1");
INSERT INTO `formset` VALUES("116","KOF-FRE","NF","NF","86","1","5","0","1");
INSERT INTO `formset` VALUES("118","KOF-FRE","DCODE","DCODE","22","4","6","0","1");
INSERT INTO `formset` VALUES("119","KOF-FRE","PROP","PROP","26","1","6","0","1");
INSERT INTO `formset` VALUES("120","KOF-FRE","MAMT","MAMT","27","1","6","0","1");
INSERT INTO `formset` VALUES("121","KOF-FRE","MREF","MREF","28","1","6","0","1");
INSERT INTO `formset` VALUES("122","KOF-FRE","SECNUM","SECNUM","29","5","6","0","1");
INSERT INTO `formset` VALUES("123","KOF-FRE","BLOCK","BLOCK","34","8","6","0","1");
INSERT INTO `formset` VALUES("124","KOF-FRE","TSHIP","TSHIP","42","2","6","0","1");
INSERT INTO `formset` VALUES("125","KOF-FRE","DQ","DQ","44","30","6","0","1");
INSERT INTO `formset` VALUES("126","KOF-FRE","SNAME","SNAME","74","35","6","0","1");
INSERT INTO `formset` VALUES("127","KOF-FRE","ABSNUM","ABSNUM","109","5","6","0","1");
INSERT INTO `formset` VALUES("128","KOF-FRE","ACRES","ACRES","114","15","6","0","1");





CREATE TABLE `kof-fre-ff` (
  `IMAGE_FILENAME` varchar(21) DEFAULT NULL,
  `DCODE` varchar(4) DEFAULT NULL,
  `PROP` varchar(1) DEFAULT NULL,
  `MAMT` varchar(1) DEFAULT NULL,
  `MREF` varchar(1) DEFAULT NULL,
  `SECNUM` varchar(5) DEFAULT NULL,
  `BLOCK` varchar(8) DEFAULT NULL,
  `TSHIP` varchar(2) DEFAULT NULL,
  `DQ` varchar(30) DEFAULT NULL,
  `SNAME` varchar(35) DEFAULT NULL,
  `ABSNUM` varchar(5) DEFAULT NULL,
  `ACRES` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `kof-fre-grantee` (
  `IMAGE_FILENAME` varchar(21) DEFAULT NULL,
  `DDESC1` varchar(60) DEFAULT NULL,
  `DCODE` varchar(4) DEFAULT NULL,
  `DDESC2` varchar(70) DEFAULT NULL,
  `PROP` varchar(1) DEFAULT NULL,
  `TOR2` varchar(70) DEFAULT NULL,
  `TOR3` varchar(70) DEFAULT NULL,
  `TOR1` varchar(60) DEFAULT NULL,
  `TEE1` varchar(60) DEFAULT NULL,
  `TEE2` varchar(70) DEFAULT NULL,
  `TEE3` varchar(70) DEFAULT NULL,
  `MAMT` varchar(1) DEFAULT NULL,
  `MREF` varchar(1) DEFAULT NULL,
  `COMM1` varchar(60) DEFAULT NULL,
  `COMM2` varchar(70) DEFAULT NULL,
  `COMM3` varchar(70) DEFAULT NULL,
  `IMGFN` varchar(21) DEFAULT NULL,
  `COMM4` varchar(70) DEFAULT NULL,
  `COMM5` varchar(70) DEFAULT NULL,
  `TOR4` varchar(70) DEFAULT NULL,
  `TOR5` varchar(70) DEFAULT NULL,
  `TEE4` varchar(70) DEFAULT NULL,
  `TEE5` varchar(70) DEFAULT NULL,
  `NTYPEID` varchar(1) DEFAULT NULL,
  `AKEY` varchar(3) DEFAULT NULL,
  `LCODE` varchar(5) DEFAULT NULL,
  `GRANTEE` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `kof-fre-grantee` VALUES("AB002309525.tif","","","","","","","","","","","w","","werwer","","err","assadadas","","mma","mami","mamikana","","sdsdsdsasdsdad","","","","");
INSERT INTO `kof-fre-grantee` VALUES("AB002309525.tif","","","","","","","","","","","w","","werwer","","err","assadadas","","mma","mami","mamikana","","sdsdsdsasdsdad","","","","");
INSERT INTO `kof-fre-grantee` VALUES("AB002309525.tif","","","","","","","","","","","w","","werwer","","err","assadadas","","mma","mami","mamikana","","sdsdsdsasdsdad","","","","");





CREATE TABLE `kof-fre-grantor` (
  `IMAGE_FILENAME` varchar(21) DEFAULT NULL,
  `DDESC1` varchar(60) DEFAULT NULL,
  `DCODE` varchar(4) DEFAULT NULL,
  `DDESC2` varchar(70) DEFAULT NULL,
  `PROP` varchar(1) DEFAULT NULL,
  `TOR2` varchar(70) DEFAULT NULL,
  `TOR3` varchar(70) DEFAULT NULL,
  `TOR1` varchar(60) DEFAULT NULL,
  `TEE1` varchar(60) DEFAULT NULL,
  `TEE2` varchar(70) DEFAULT NULL,
  `TEE3` varchar(70) DEFAULT NULL,
  `MAMT` varchar(1) DEFAULT NULL,
  `MREF` varchar(1) DEFAULT NULL,
  `COMM1` varchar(60) DEFAULT NULL,
  `COMM2` varchar(70) DEFAULT NULL,
  `COMM3` varchar(70) DEFAULT NULL,
  `IMGFN` varchar(21) DEFAULT NULL,
  `COMM4` varchar(70) DEFAULT NULL,
  `COMM5` varchar(70) DEFAULT NULL,
  `TOR4` varchar(70) DEFAULT NULL,
  `TOR5` varchar(70) DEFAULT NULL,
  `TEE4` varchar(70) DEFAULT NULL,
  `TEE5` varchar(70) DEFAULT NULL,
  `NTYPEID` varchar(1) DEFAULT NULL,
  `AKEY` varchar(3) DEFAULT NULL,
  `LCODE` varchar(5) DEFAULT NULL,
  `GRANTOR` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `kof-fre-grantor` VALUES("AB002309525.tif","","ddd","","","","","","","","","","","","","","","","","","","","adasdasdadadasda","","","","");
INSERT INTO `kof-fre-grantor` VALUES("AB002309525.tif","","ddd","","","","asdad","asd","ad","dada","","","","asdad","afafad","","","","","","","","adasdasdadadasda","","","","");
INSERT INTO `kof-fre-grantor` VALUES("AB002309525.tif","","ddd","","","","asdad","asd","ad","dada","","","","asdad","afafad","","","","","","","","adasdasdadadasda","","","","adasdasdasdadad");
INSERT INTO `kof-fre-grantor` VALUES("AB002309525.tif","","ddd","","","","asdad","asd","ad","dada","","","","asdad","afafad","","","","","","","","adasdasdadadasda","","","","adasdasdasdadad");
INSERT INTO `kof-fre-grantor` VALUES("AB002309525.tif","","ddd","","","","asdad","asd","ad","dada","","","","asdad","afafad","","","","","","","","adasdasdadadasda","","","","adasdasdasdadad");





CREATE TABLE `kof-fre-header` (
  `IMAGE_FILENAME` varchar(21) DEFAULT NULL,
  `DOCNUM` varchar(8) DEFAULT NULL,
  `DOCTYPE` varchar(3) DEFAULT NULL,
  `DIQ` varchar(1) DEFAULT NULL,
  `RDATE` varchar(8) DEFAULT NULL,
  `DDATE` varchar(8) DEFAULT NULL,
  `AMT` varchar(13) DEFAULT NULL,
  `REF` varchar(15) DEFAULT NULL,
  `CASENO` varchar(20) DEFAULT NULL,
  `COURT` varchar(20) DEFAULT NULL,
  `EDATEM` varchar(2) DEFAULT NULL,
  `EDATED` varchar(2) DEFAULT NULL,
  `EDATEY` varchar(2) DEFAULT NULL,
  `EUSERID` varchar(3) DEFAULT NULL,
  `VDATEM` varchar(2) DEFAULT NULL,
  `VDATED` varchar(2) DEFAULT NULL,
  `VDATEY` varchar(2) DEFAULT NULL,
  `VUSERID` varchar(3) DEFAULT NULL,
  `BNAME` varchar(8) DEFAULT NULL,
  `DCOUNT` varchar(3) DEFAULT NULL,
  `DCODE` varchar(4) DEFAULT NULL,
  `DDESC1` varchar(60) DEFAULT NULL,
  `DDESC2` varchar(70) DEFAULT NULL,
  `PROP` varchar(1) DEFAULT NULL,
  `TOR2` varchar(70) DEFAULT NULL,
  `TOR3` varchar(70) DEFAULT NULL,
  `TOR1` varchar(60) DEFAULT NULL,
  `TEE1` varchar(60) DEFAULT NULL,
  `TEE2` varchar(70) DEFAULT NULL,
  `TEE3` varchar(70) DEFAULT NULL,
  `MAMT` varchar(1) DEFAULT NULL,
  `MREF` varchar(1) DEFAULT NULL,
  `COMM1` varchar(60) DEFAULT NULL,
  `COMM2` varchar(70) DEFAULT NULL,
  `COMM3` varchar(70) DEFAULT NULL,
  `COMM4` varchar(70) DEFAULT NULL,
  `COMM5` varchar(70) DEFAULT NULL,
  `TOR4` varchar(70) DEFAULT NULL,
  `TOR5` varchar(70) DEFAULT NULL,
  `TEE4` varchar(70) DEFAULT NULL,
  `TEE5` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");
INSERT INTO `kof-fre-header` VALUES("AB002309525.tif","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","sdadasdasdasd");





CREATE TABLE `kof-fre-str` (
  `IMAGE_FILENAME` varchar(21) DEFAULT NULL,
  `DCODE` varchar(4) DEFAULT NULL,
  `PROP` varchar(1) DEFAULT NULL,
  `MAMT` varchar(1) DEFAULT NULL,
  `MREF` varchar(1) DEFAULT NULL,
  `SNAME` varchar(35) DEFAULT NULL,
  `ABSNUM` varchar(5) DEFAULT NULL,
  `PART` varchar(2) DEFAULT NULL,
  `ACRES` varchar(15) DEFAULT NULL,
  `NF` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `kof-fre-subd` (
  `IMAGE_FILENAME` varchar(21) DEFAULT NULL,
  `DCODE` varchar(4) DEFAULT NULL,
  `PROP` varchar(1) DEFAULT NULL,
  `MAMT` varchar(1) DEFAULT NULL,
  `MREF` varchar(1) DEFAULT NULL,
  `LLOT` varchar(8) DEFAULT NULL,
  `HLOT` varchar(8) DEFAULT NULL,
  `BLOCK` varchar(8) DEFAULT NULL,
  `SUBNAME` varchar(35) DEFAULT NULL,
  `NF` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




