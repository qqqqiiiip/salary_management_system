/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50546
Source Host           : localhost:3306
Source Database       : onestep-stage

Target Server Type    : MYSQL
Target Server Version : 50546
File Encoding         : 65001

Date: 2016-05-10 17:46:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ben_print`
-- ----------------------------
DROP TABLE IF EXISTS `ben_print`;
CREATE TABLE `ben_print` (
  `id` bigint(5) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `class` char(20) DEFAULT NULL,
  `time` char(20) DEFAULT '0000-00-00',
  `print_type` char(10) DEFAULT NULL COMMENT '1表示中文 2表示英文',
  `status` int(1) DEFAULT '0' COMMENT '0表示未处理 1表示已打印 2表示未打印',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ben_print
-- ----------------------------
INSERT INTO `ben_print` VALUES ('1', '弓海斌', '2014014328', '计科1403', '16-05-08', '中文', '1');
INSERT INTO `ben_print` VALUES ('2', '', '', '', '16-05-08', '中文', '2');
INSERT INTO `ben_print` VALUES ('3', '', '', '', '16-05-08', '英文', '0');

-- ----------------------------
-- Table structure for `ben_problem_solving`
-- ----------------------------
DROP TABLE IF EXISTS `ben_problem_solving`;
CREATE TABLE `ben_problem_solving` (
  `id` bigint(5) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `question` text,
  `questin_content` text,
  `answer` text,
  `status` int(1) DEFAULT NULL,
  `note` text COMMENT '负责老师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ben_problem_solving
-- ----------------------------
INSERT INTO `ben_problem_solving` VALUES ('1', '', '', 'question1', 'question111111111111', 'answer1', '0', '');
INSERT INTO `ben_problem_solving` VALUES ('2', '', null, 'xxxx', 'question22222222222', 'answer2', '1', null);
INSERT INTO `ben_problem_solving` VALUES ('3', null, null, 'question3', 'question3333333333', 'answer3', '0', null);
INSERT INTO `ben_problem_solving` VALUES ('4', '弓海斌', '2014014328', 'AJAX是什么？', 'AJAX是什么？？？？？？？？？', 'answer4', '0', null);
INSERT INTO `ben_problem_solving` VALUES ('5', null, null, ' 关于jquery.ajax的例子', null, '看看这个教程把： http://www.gbin1.com/technology/jquery/20120307ajaxforjquerypart1/ (第一部分到第四部分），比较全的jquery AJAX教程', '1', null);
INSERT INTO `ben_problem_solving` VALUES ('6', null, null, 'question4', null, null, '1', null);
INSERT INTO `ben_problem_solving` VALUES ('7', null, null, 'question6', null, null, '1', null);
INSERT INTO `ben_problem_solving` VALUES ('8', '弓海斌', '2014014328', 'aaa', 'sdasdas', null, '0', null);
INSERT INTO `ben_problem_solving` VALUES ('9', null, null, 'llll', null, null, '1', null);
INSERT INTO `ben_problem_solving` VALUES ('10', '弓海斌', '2014014328', '', '', null, '0', null);
INSERT INTO `ben_problem_solving` VALUES ('11', '弓海斌', '2014014328', '', '', null, '0', null);
INSERT INTO `ben_problem_solving` VALUES ('12', '弓海斌', '2014014328', '', '', null, '1', null);
INSERT INTO `ben_problem_solving` VALUES ('13', '', '', '', '', null, '0', null);
INSERT INTO `ben_problem_solving` VALUES ('14', '', '', '', '', null, '0', null);

-- ----------------------------
-- Table structure for `ben_scholarships_reissue`
-- ----------------------------
DROP TABLE IF EXISTS `ben_scholarships_reissue`;
CREATE TABLE `ben_scholarships_reissue` (
  `id` int(10) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `class` char(20) DEFAULT NULL,
  `reason` text,
  `time` datetime DEFAULT NULL,
  `tel` bigint(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `teacher` char(20) DEFAULT NULL,
  `teacher2` char(20) DEFAULT NULL COMMENT '负责老师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ben_scholarships_reissue
-- ----------------------------
INSERT INTO `ben_scholarships_reissue` VALUES ('1', '弓海斌', '2014014328', '计科1403', '卡丢失 新卡号123456789', '2016-03-31 03:27:00', '111111111', '1', '辅导员A', null);
INSERT INTO `ben_scholarships_reissue` VALUES ('2', '弓海斌', '2014014328', '计科1403', '卡丢失 新卡号123456789ddddd555555555555dddddddddddddddddasdsaaaaaaaaaaaaaaaaaaaadd55', '2016-03-31 03:28:00', '111111111', '1', '辅导员B', null);
INSERT INTO `ben_scholarships_reissue` VALUES ('3', '弓海斌', '2014014328', '计科1403', '', '2016-05-02 03:45:00', '111111111', '0', '辅导员A', null);
INSERT INTO `ben_scholarships_reissue` VALUES ('4', '弓海斌', '2014014328', '计科1403', '', '2016-05-02 03:45:00', '111111111', '1', '辅导员D', null);
INSERT INTO `ben_scholarships_reissue` VALUES ('5', '弓海斌', '2014014328', '计科1403', '', '2016-05-08 07:40:00', '111111111', '1', '', null);

-- ----------------------------
-- Table structure for `ben_things_order`
-- ----------------------------
DROP TABLE IF EXISTS `ben_things_order`;
CREATE TABLE `ben_things_order` (
  `id` bigint(5) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `things_type` char(20) DEFAULT NULL,
  `time` char(20) DEFAULT '0000-00-00',
  `tel` char(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `note` text COMMENT '负责老师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ben_things_order
-- ----------------------------
INSERT INTO `ben_things_order` VALUES ('1', '', '', '1', '16-04-09上午', '', '1', '测测测测测测测测测测测测测测测');
INSERT INTO `ben_things_order` VALUES ('2', '', '', '1', '16-04-10上午', '', '2', '');
INSERT INTO `ben_things_order` VALUES ('3', 'q', '', '1', '16-05-02上午', '', '0', '');
INSERT INTO `ben_things_order` VALUES ('4', '', '', '1', '16-05-08上午', '', '2', '');
INSERT INTO `ben_things_order` VALUES ('5', '', '', '1', '16-05-08上午', '', '1', '');

-- ----------------------------
-- Table structure for `dongtai`
-- ----------------------------
DROP TABLE IF EXISTS `dongtai`;
CREATE TABLE `dongtai` (
  `tittle` char(50) NOT NULL,
  `time` char(20) DEFAULT NULL,
  `a` char(20) DEFAULT NULL,
  PRIMARY KEY (`tittle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dongtai
-- ----------------------------
INSERT INTO `dongtai` VALUES ('【信息公告】北京化工大学教育培训中心雅思培训及出国指…', '03-15', null);
INSERT INTO `dongtai` VALUES ('【讲座预告】关于校分析测试中心固体核磁共振实验基础知…', '03-16', null);
INSERT INTO `dongtai` VALUES ('【讲座预告】国际教育学院系列讲座报告之八：“生物工程”专…', '03-15', null);
INSERT INTO `dongtai` VALUES ('北京化工大学与美国石溪大学合作举办管理科学与工程专…', '03-18', null);

-- ----------------------------
-- Table structure for `liuchenglei`
-- ----------------------------
DROP TABLE IF EXISTS `liuchenglei`;
CREATE TABLE `liuchenglei` (
  `id` int(1) NOT NULL,
  `name` text,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of liuchenglei
-- ----------------------------
INSERT INTO `liuchenglei` VALUES ('1', '毕业生还款', '2014 届毕业生生源地贷款“毕业确认”工作 一、 提前准备 1 、 提前将需要生贷“毕业确认”的学生名单掌握清楚， 特别需要完整浏览全校名单，防止因转专业转到你系，而 贷款时登记的专业是他系的情况。各系名单务必以毕业时 真实情况为准。 2 、 在毕业生 QQ 群，或其他通知途径，提前通知毕业生返 校时带上贷款合同，以便在网上确认和填写纸质“还款确 认书”时获取相关信息。 二、 “毕业确认”具体流程 1 、填写”湖北省生源地信用助学贷款还款确认书” ， 以系部为单位收齐，最终汇总到资助中心。系部填写“湖 北省生源地信用助学贷款还款确认书汇总表” 。 2 、 贷款学生自行登录国家开发银行学生在线服务网张 （ https ： //sls.cdb.com.cn ） , 进入“毕业确认申请”页 面， 核实个人贷款全部信息， （重点本人的联系方式的更新， 以便当地资助部门联系及收取短信通知）可通过“个人信 息变更”先修改再提交，信息核实无误的，返回“毕业确 认申请”页面点击“申请” ，完成操作。 3 、发放“贷款还款提醒卡” 三、 对学生进行诚信教育、违约危害教育，及生源地助学贷款 还款操作流程培训。 1 、 诚 信教育，自行开展。 2 、 违 约的危害：第一、贷款学生违约记录直接进入中国人民 银行征信系统，对不主动与县学生资助管理中心联系还 款、提供通信方式、不守信用的学生，将记录在案，纳入 全国个人信用信息库，有不良还款记录的，其诚信身份将 受到社会的质疑 ， 也会给该生今后的人生带来许多不便 （如 毕业后单位招聘，在全国金融部门办理信用卡、车贷、房 贷遭拒等） 。第二、 影响时间长达 5 年， 即使违约后及时改 正，也为时已晚，因此务必按时、按照约定还款还息。第 三、根据合同规定，国家开发银行有权在媒体公布贷款违 约人信息。第四、影响学校师弟师妹的生源地助学贷款成 功率。 2 3 、 简 单流程： A 、从毕业当年的 9 月 1 日开始承担贷款利息， 并于当年的 12 月 20 日前通过支付宝开始偿还利息。 B 、 在 毕业两年后的 12 月 20 日（如 2014 年 6 月毕业，则 2016 年 12 月 20 日前）前开始第一次等额偿还本金，以后每年 12 月 20 日前按时偿还本金。 “还款操作详细流程”和“支付宝充值操作流程”见附件。 ');

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `right` int(1) NOT NULL,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(20) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `name` char(20) DEFAULT NULL,
  `sex` char(4) DEFAULT NULL,
  `tel` bigint(11) DEFAULT NULL,
  `class` char(20) DEFAULT NULL,
  PRIMARY KEY (`username`,`right`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('1', '0', '0', '0', '0000', '', '0', null);
INSERT INTO `login` VALUES ('0', '1', '1', '1', '学生AA', null, '987654321', '计科1403');
INSERT INTO `login` VALUES ('0', '2014014328', '2014014328', '2014014328', '本科生A', '男', '111111111', '计科1403');
INSERT INTO `login` VALUES ('0', '2014015328', '2014015328', '2014015328', '研究生A', '男', '22222222', 'XXXX');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `tittle` char(50) NOT NULL,
  `time` char(20) DEFAULT NULL,
  `a` char(20) DEFAULT NULL,
  PRIMARY KEY (`tittle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('【中国文明网】北化雷锋精神研究会：大手拉小手 一起学雷锋', '03-15', null);
INSERT INTO `news` VALUES ('学校召开2016年度人事人才教师发展工作布置会', '03-18', null);
INSERT INTO `news` VALUES ('学校召开2016年新退休教职工座谈会', '03-16', null);
INSERT INTO `news` VALUES ('我校召开2016年博士后座谈会', '03-17', null);
INSERT INTO `news` VALUES ('我校张磊教授入选第十二批“千人计划”青年人才项目', '03-15', null);

-- ----------------------------
-- Table structure for `slj_print`
-- ----------------------------
DROP TABLE IF EXISTS `slj_print`;
CREATE TABLE `slj_print` (
  `id` bigint(5) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `class` char(20) DEFAULT NULL,
  `time` char(20) DEFAULT '0000-00-00',
  `print_type` char(10) DEFAULT NULL COMMENT '1表示中文 2表示英文',
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slj_print
-- ----------------------------
INSERT INTO `slj_print` VALUES ('1', '', '', '1', '', '四级', '1');
INSERT INTO `slj_print` VALUES ('2', '弓海斌', null, null, '0000-00-00', '六级', '0');
INSERT INTO `slj_print` VALUES ('3', '弓海斌', '2014014328', '计科1403', '0000-00-00', '六级', '0');
INSERT INTO `slj_print` VALUES ('4', '弓海斌', '2014014328', '计科1403', '16-05-08', '六级', '0');
INSERT INTO `slj_print` VALUES ('5', '弓海斌', '2014014328', '计科1403', '16-05-08', '四级', '2');

-- ----------------------------
-- Table structure for `suggestion`
-- ----------------------------
DROP TABLE IF EXISTS `suggestion`;
CREATE TABLE `suggestion` (
  `id` bigint(5) NOT NULL,
  `suggestion` text NOT NULL,
  `username` char(50) NOT NULL DEFAULT '',
  `time` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of suggestion
-- ----------------------------
INSERT INTO `suggestion` VALUES ('1', 'first', '访客', '2016-03-22');
INSERT INTO `suggestion` VALUES ('2', 'second', '访客', '2016-03-22');
INSERT INTO `suggestion` VALUES ('3', '988', '2014014328', '2016-03-22');
INSERT INTO `suggestion` VALUES ('4', 'sadas', '2014014328', '2016-04-07');
INSERT INTO `suggestion` VALUES ('5', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('6', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('7', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('8', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('9', 'asda', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('10', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('11', 'qwewq', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('12', 'qwewq', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('13', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('14', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('15', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('16', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('17', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('18', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('19', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('20', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('21', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('22', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('23', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('24', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('25', 'qwe', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('26', 'qwe', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('27', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('28', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('29', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('30', '', '2014014328', '2016-05-07');
INSERT INTO `suggestion` VALUES ('31', 'wqe', '2014014328', '2016-05-07');

-- ----------------------------
-- Table structure for `tuan_shenqing`
-- ----------------------------
DROP TABLE IF EXISTS `tuan_shenqing`;
CREATE TABLE `tuan_shenqing` (
  `id` int(5) NOT NULL DEFAULT '0',
  `organize` char(20) DEFAULT '0',
  `active_name` char(20) DEFAULT NULL,
  `name` char(20) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `class` char(20) DEFAULT NULL,
  `reason` text,
  `time` char(20) DEFAULT NULL,
  `began_time` char(50) DEFAULT NULL,
  `end_time` char(50) DEFAULT NULL COMMENT '时间',
  `tel` bigint(11) DEFAULT NULL,
  `place` char(20) DEFAULT NULL COMMENT '打印份数',
  `status` int(1) DEFAULT NULL,
  `teacher` char(20) DEFAULT NULL,
  `teacher2` char(20) DEFAULT NULL COMMENT '负责老师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tuan_shenqing
-- ----------------------------
INSERT INTO `tuan_shenqing` VALUES ('1', '', '', '弓海斌', '2014014328', '计科1403', '', '2016/03/', '2016/03/萨达撒', '2016/03/29', '111111111', '', '0', '', null);
INSERT INTO `tuan_shenqing` VALUES ('2', '计科', '啊啊啊啊啊啊', '弓海斌', '2014014328', '计科1403', null, '2016/03/15', '3.15', '3.16', '111111111', '主教000', '2', '对对对', null);
INSERT INTO `tuan_shenqing` VALUES ('3', '计科2', 'test', '弓海斌', '2014014328', '计科1403', null, '2016/03/16', '3.16', '3.17', '987654321', '主教111', '0', '啊啊啊', null);
INSERT INTO `tuan_shenqing` VALUES ('4', '计科3', 'test3', '弓海斌', '2014014328', '计科1403', null, '2016/03/17', '3.17', '3.18', '987654321', '主教123', '1', '啊啊啊', null);
INSERT INTO `tuan_shenqing` VALUES ('5', '计科4', 'test3', '弓海斌', '2014014328', '计科1403', null, '2016/03/17', '2019.18', '2019.19', '6666666', '主教345', '1', '啊啊啊', null);
INSERT INTO `tuan_shenqing` VALUES ('6', '计科5', 'test5', '弓海斌', '2014014328', '计科1403', '去去去去去去去去去去去去去去去去去去', '2016/03/', '2016/03/19', '2016/03/1720', '5555555555', '主教789', '0', '不不不', null);
INSERT INTO `tuan_shenqing` VALUES ('7', '计科7', 'test', '0000', '0', '', '卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡看看', '2016/03/', '2016/03/18', '2016/03/1818', '16733131', '主教444', '1', '啊啊啊', null);
INSERT INTO `tuan_shenqing` VALUES ('8', '', '', '弓海斌', '2014014328', '计科1403', '', '2016/05/', '2016/05/', '2016/05/08', '111111111', '', '0', '', null);

-- ----------------------------
-- Table structure for `tuan_ticket`
-- ----------------------------
DROP TABLE IF EXISTS `tuan_ticket`;
CREATE TABLE `tuan_ticket` (
  `id` bigint(5) NOT NULL,
  `active_name` char(50) DEFAULT NULL,
  `active_place` char(20) DEFAULT NULL,
  `active_time` char(20) DEFAULT NULL,
  `organize` char(20) DEFAULT '0000-00-00',
  `ticket_num` int(3) NOT NULL DEFAULT '0',
  `status` int(1) DEFAULT NULL,
  `note` text COMMENT '负责老师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tuan_ticket
-- ----------------------------
INSERT INTO `tuan_ticket` VALUES ('1', 'A', '', '16-04-09上午', 'A', '0', '1', ' ');
INSERT INTO `tuan_ticket` VALUES ('2', 'B', '', '', 'B', '0', '1', '');
INSERT INTO `tuan_ticket` VALUES ('3', 'C', '', '', 'C', '452', '0', '');
INSERT INTO `tuan_ticket` VALUES ('4', 'D', '', '', 'D', '0', '0', '');
INSERT INTO `tuan_ticket` VALUES ('5', 'E', '', '16-05-08第二节课', 'E', '16', '0', '');
INSERT INTO `tuan_ticket` VALUES ('6', null, null, null, '0000-00-00', '0', '0', null);
INSERT INTO `tuan_ticket` VALUES ('7', '', '', '', '0000-00-00', '0', '0', null);
INSERT INTO `tuan_ticket` VALUES ('8', '', '', '', '', '0', '0', null);
INSERT INTO `tuan_ticket` VALUES ('9', '', '', '', '', '11', '0', '');

-- ----------------------------
-- Table structure for `xjzm_print`
-- ----------------------------
DROP TABLE IF EXISTS `xjzm_print`;
CREATE TABLE `xjzm_print` (
  `id` bigint(5) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `class` char(20) DEFAULT NULL,
  `time` char(20) DEFAULT '0000-00-00',
  `print_type` char(10) DEFAULT NULL COMMENT '1表示中文 2表示英文',
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xjzm_print
-- ----------------------------
INSERT INTO `xjzm_print` VALUES ('1', '', '', '1', '', '中文', '1');
INSERT INTO `xjzm_print` VALUES ('2', '弓海斌', null, null, '0000-00-00', '中文', '0');
INSERT INTO `xjzm_print` VALUES ('3', '弓海斌', '2014014328', '计科1403', '0000-00-00', '中文', '0');
INSERT INTO `xjzm_print` VALUES ('4', '弓海斌', '2014014328', '计科1403', '16-05-08', '中文', '0');
INSERT INTO `xjzm_print` VALUES ('5', '弓海斌', '2014014328', '计科1403', '16-05-08', '英文', '0');

-- ----------------------------
-- Table structure for `xueye_consult`
-- ----------------------------
DROP TABLE IF EXISTS `xueye_consult`;
CREATE TABLE `xueye_consult` (
  `id` bigint(5) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `question` text,
  `questin_content` text,
  `answer` text,
  `status` int(1) DEFAULT NULL,
  `note` text COMMENT '负责老师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xueye_consult
-- ----------------------------
INSERT INTO `xueye_consult` VALUES ('1', '', '', 'question1111', 'question111111111111', 'answer1', '1', '');
INSERT INTO `xueye_consult` VALUES ('2', '', null, 'question2', 'question22222222222', 'answer2', '0', null);
INSERT INTO `xueye_consult` VALUES ('3', null, null, 'question3', 'question3333333333', 'answer3', '1', null);
INSERT INTO `xueye_consult` VALUES ('4', '弓海斌', '2014014328', 'AJAX是什么？', 'AJAX是什么？？？？？？？？？', '1.什么是Ajax? \r\nAjax的全称是：AsynchronousJavaScript+XML \r\n\r\n2.Ajax的定义： \r\nAjax不是一个技术，它实际上是几种技术，每种技术都有其独特这处，合在一起就成了一个功能强大的新技术。 \r\n\r\n3.Ajax包括： \r\nXHTML和CSS \r\n使用文档对象模型(DocumentObjectModel)作动态显示和交互 \r\n使用XML和XSLT做数据交互和操作 \r\n使用XMLHttpRequest进行异步数据接收 \r\n使用JavaScript将它们绑定在一起 \r\n\r\nWeb开发领域的最新时髦术语其实质是“旧貌换新颜”。 \r\n\r\nAjax（AsynchronousJavaScriptandXML）是结合了Java技术、XML以及JavaScript等编程技术，可以让开发人员构建基于Java技术的Web应用，并打破了使用页面重载的惯例。 \r\n\r\nAjax是使用客户端脚本与Web服务器交换数据的Web应用开发方法。这样，Web页面不用打断交互流程进行重新加裁，就可以动态地更新。使用Ajax，用户可以创建接近本地桌面应用的直接、高可用、更丰富、更动态的Web用户界面。 \r\n\r\n异步JavaScript和XML（AJAX）不是什么新技术，而是指这样一种方法：使用几种现有技术——包括级联样式表（CSS）、JavaScript、XHTML、XML和可扩展样式语言转换（XSLT），开发外观及操作类似桌面软件的Web应用软件。实现Ajax的所有组件都已存在了许多年。AdaptivePath的用户体验战略部门主管兼创办合伙人JesseJamesGarrett今年2月发表在AdaptivePath网站上的一篇文章中杜撰了这个术语。 ', '0', null);
INSERT INTO `xueye_consult` VALUES ('5', null, null, ' 关于jquery.ajax的例子', null, '看看这个教程把： http://www.gbin1.com/technology/jquery/20120307ajaxforjquerypart1/ (第一部分到第四部分），比较全的jquery AJAX教程', null, null);
INSERT INTO `xueye_consult` VALUES ('6', null, null, 'question4', null, null, null, null);
INSERT INTO `xueye_consult` VALUES ('7', null, null, 'question5', null, null, null, null);
INSERT INTO `xueye_consult` VALUES ('8', null, null, 'qqqqqq', null, null, null, null);
INSERT INTO `xueye_consult` VALUES ('9', null, null, 'question7', null, null, null, null);
INSERT INTO `xueye_consult` VALUES ('10', null, null, 'question8', null, null, null, null);
INSERT INTO `xueye_consult` VALUES ('11', null, null, 'question9', null, null, '1', null);
INSERT INTO `xueye_consult` VALUES ('12', '弓海斌', '2014014328', 'aaa', 'sdasdas', null, '0', null);
INSERT INTO `xueye_consult` VALUES ('13', '弓海斌', '2014014328', '', '', null, '0', null);
INSERT INTO `xueye_consult` VALUES ('14', '弓海斌', '2014014328', '', '', null, '0', null);
INSERT INTO `xueye_consult` VALUES ('15', '', '', '', '', null, '0', null);

-- ----------------------------
-- Table structure for `yan_consult`
-- ----------------------------
DROP TABLE IF EXISTS `yan_consult`;
CREATE TABLE `yan_consult` (
  `id` bigint(5) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `question` text,
  `questin_content` text,
  `answer` text,
  `status` int(1) DEFAULT NULL,
  `note` text COMMENT '负责老师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yan_consult
-- ----------------------------
INSERT INTO `yan_consult` VALUES ('1', '', '', 'question1111', 'question111111111111', 'answer1', '0', '');
INSERT INTO `yan_consult` VALUES ('2', '', null, 'question2', 'question22222222222', 'answer2', '1', null);
INSERT INTO `yan_consult` VALUES ('3', null, null, 'question3', 'question3333333333', 'answer3', '1', null);
INSERT INTO `yan_consult` VALUES ('4', '弓海斌', '2014014328', 'AJAX是什么？', 'AJAX是什么？？？？？？？？？', '1.什么是Ajax? \r\nAjax的全称是：AsynchronousJavaScript+XML \r\n\r\n2.Ajax的定义： \r\nAjax不是一个技术，它实际上是几种技术，每种技术都有其独特这处，合在一起就成了一个功能强大的新技术。 \r\n\r\n3.Ajax包括： \r\nXHTML和CSS \r\n使用文档对象模型(DocumentObjectModel)作动态显示和交互 \r\n使用XML和XSLT做数据交互和操作 \r\n使用XMLHttpRequest进行异步数据接收 \r\n使用JavaScript将它们绑定在一起 \r\n\r\nWeb开发领域的最新时髦术语其实质是“旧貌换新颜”。 \r\n\r\nAjax（AsynchronousJavaScriptandXML）是结合了Java技术、XML以及JavaScript等编程技术，可以让开发人员构建基于Java技术的Web应用，并打破了使用页面重载的惯例。 \r\n\r\nAjax是使用客户端脚本与Web服务器交换数据的Web应用开发方法。这样，Web页面不用打断交互流程进行重新加裁，就可以动态地更新。使用Ajax，用户可以创建接近本地桌面应用的直接、高可用、更丰富、更动态的Web用户界面。 \r\n\r\n异步JavaScript和XML（AJAX）不是什么新技术，而是指这样一种方法：使用几种现有技术——包括级联样式表（CSS）、JavaScript、XHTML、XML和可扩展样式语言转换（XSLT），开发外观及操作类似桌面软件的Web应用软件。实现Ajax的所有组件都已存在了许多年。AdaptivePath的用户体验战略部门主管兼创办合伙人JesseJamesGarrett今年2月发表在AdaptivePath网站上的一篇文章中杜撰了这个术语。 ', '1', null);
INSERT INTO `yan_consult` VALUES ('5', null, null, ' 关于jquery.ajax的例子', null, '看看这个教程把： http://www.gbin1.com/technology/jquery/20120307ajaxforjquerypart1/ (第一部分到第四部分），比较全的jquery AJAX教程', null, null);
INSERT INTO `yan_consult` VALUES ('6', null, null, 'question4', null, null, null, null);
INSERT INTO `yan_consult` VALUES ('7', null, null, 'question5', null, null, null, null);
INSERT INTO `yan_consult` VALUES ('8', null, null, 'qqqqqq', null, null, null, null);
INSERT INTO `yan_consult` VALUES ('9', null, null, 'question7', null, null, null, null);
INSERT INTO `yan_consult` VALUES ('10', null, null, 'question8', null, null, null, null);
INSERT INTO `yan_consult` VALUES ('11', null, null, 'question9', null, null, null, null);
INSERT INTO `yan_consult` VALUES ('12', '弓海斌', '2014014328', 'aaa', 'sdasdas', null, '0', null);
INSERT INTO `yan_consult` VALUES ('13', '弓海斌', '2014014328', '', '', null, '0', null);

-- ----------------------------
-- Table structure for `yan_jiaoshishenqing`
-- ----------------------------
DROP TABLE IF EXISTS `yan_jiaoshishenqing`;
CREATE TABLE `yan_jiaoshishenqing` (
  `id` int(5) NOT NULL,
  `organize` char(20) DEFAULT '0',
  `active_name` char(20) DEFAULT NULL,
  `name` char(20) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `class` char(20) DEFAULT NULL,
  `reason` text,
  `time` char(20) DEFAULT NULL,
  `began_time` char(50) DEFAULT NULL,
  `end_time` char(50) DEFAULT NULL COMMENT '时间',
  `tel` bigint(11) DEFAULT NULL,
  `place` char(20) DEFAULT NULL COMMENT '打印份数',
  `status` int(1) DEFAULT NULL,
  `teacher` char(20) DEFAULT NULL,
  `teacher2` char(20) DEFAULT NULL COMMENT '负责老师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yan_jiaoshishenqing
-- ----------------------------
INSERT INTO `yan_jiaoshishenqing` VALUES ('1', '', '', '弓海斌', '2014014328', '计科1403', '阿萨德', '2016/03/14', null, null, '111111111', '', '0', '', null);
INSERT INTO `yan_jiaoshishenqing` VALUES ('2', '计科5', 'test5', '弓海斌', '2014014328', '计科1403', '去去去去去去去去去去去去去去去去去去', '2016/03/15', null, null, '5555555555', '主教789', '1', '不不不', null);
INSERT INTO `yan_jiaoshishenqing` VALUES ('3', '计科7', 'test', '0000', '0', '', '卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡卡看看', '2016/03/16', null, null, '16733131', '主教444', '1', '啊啊啊', null);
INSERT INTO `yan_jiaoshishenqing` VALUES ('4', '', '', '弓海斌', '2014014328', '计科1403', '', '2016/05/17', null, null, '111111111', '', '2', '', null);

-- ----------------------------
-- Table structure for `yan_print`
-- ----------------------------
DROP TABLE IF EXISTS `yan_print`;
CREATE TABLE `yan_print` (
  `id` bigint(5) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `class` char(20) DEFAULT NULL,
  `time` char(20) DEFAULT '0000-00-00',
  `print_type` char(10) DEFAULT NULL COMMENT '1表示中文 2表示英文',
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yan_print
-- ----------------------------
INSERT INTO `yan_print` VALUES ('1', '', '', '1', '', '中文', '1');
INSERT INTO `yan_print` VALUES ('2', '弓海斌', null, null, '0000-00-00', '英文', '0');
INSERT INTO `yan_print` VALUES ('3', '弓海斌', '2014014328', '计科1403', '0000-00-00', '中文', '0');
INSERT INTO `yan_print` VALUES ('4', '弓海斌', '2014014328', '计科1403', '16-05-08', '中文', '1');
INSERT INTO `yan_print` VALUES ('5', '弓海斌', '2014014328', '计科1403', '16-05-08', '中文', '0');
INSERT INTO `yan_print` VALUES ('6', '', '', '', '16-05-08', '中文', '2');
INSERT INTO `yan_print` VALUES ('7', '弓海斌', '2014014328', '计科1403', '16-05-09', '中文', '0');

-- ----------------------------
-- Table structure for `yan_sushebiangeng`
-- ----------------------------
DROP TABLE IF EXISTS `yan_sushebiangeng`;
CREATE TABLE `yan_sushebiangeng` (
  `id` int(5) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `class` char(20) DEFAULT NULL,
  `reason` text,
  `time` char(20) DEFAULT NULL,
  `yuan` char(50) DEFAULT NULL COMMENT '打印份数',
  `want` char(50) DEFAULT '' COMMENT '时间',
  `tel` bigint(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `teacher` char(20) DEFAULT NULL,
  `teacher2` char(20) DEFAULT NULL COMMENT '负责老师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yan_sushebiangeng
-- ----------------------------
INSERT INTO `yan_sushebiangeng` VALUES ('1', '弓海斌', '2014014328', '计科1403', '', '2016/03/31', '123', '456', '111111111', '1', '辅导员A', null);
INSERT INTO `yan_sushebiangeng` VALUES ('2', '弓海斌', '2014014328', '计科1403', '', '2016/05/08', '456', '567', '111111111', '2', '辅导员B', null);
INSERT INTO `yan_sushebiangeng` VALUES ('3', '0000', '0', '', '', '2016/05/09', '', '', '0', '0', '', null);
INSERT INTO `yan_sushebiangeng` VALUES ('4', '0000', '0', '', '', '2016/05/09', '', '', '0', '0', '', null);
INSERT INTO `yan_sushebiangeng` VALUES ('5', '弓海斌', '2014014328', '计科1403', '', '2016/05/09', '', '', '111111111', '0', '', null);
INSERT INTO `yan_sushebiangeng` VALUES ('6', '弓海斌', '2014014328', '计科1403', '', '2016/05/09', '', '', '111111111', '0', '', null);
INSERT INTO `yan_sushebiangeng` VALUES ('7', '弓海斌', '2014014328', '计科1403', '', '2016/05/09', '', '', '111111111', '0', '', null);

-- ----------------------------
-- Table structure for `yan_things_order`
-- ----------------------------
DROP TABLE IF EXISTS `yan_things_order`;
CREATE TABLE `yan_things_order` (
  `id` bigint(5) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `things_type` char(20) DEFAULT NULL,
  `time` char(20) DEFAULT '0000-00-00',
  `tel` char(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `note` text COMMENT '负责老师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yan_things_order
-- ----------------------------
INSERT INTO `yan_things_order` VALUES ('1', '', '', '1', '16-04-09上午', '', '1', '测测测测测测测测测测测测测测测');
INSERT INTO `yan_things_order` VALUES ('2', '', '', '1', '16-04-10上午', '', '2', '');
INSERT INTO `yan_things_order` VALUES ('3', 'q', '', '1', '16-05-02上午', '', '1', '');
INSERT INTO `yan_things_order` VALUES ('4', '', '', '1', '16-05-08上午', '', '0', '');

-- ----------------------------
-- Table structure for `zhu_consult`
-- ----------------------------
DROP TABLE IF EXISTS `zhu_consult`;
CREATE TABLE `zhu_consult` (
  `id` bigint(5) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `question` text,
  `questin_content` text,
  `answer` text,
  `status` int(1) DEFAULT NULL,
  `note` text COMMENT '负责老师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zhu_consult
-- ----------------------------
INSERT INTO `zhu_consult` VALUES ('1', '', '', 'question1', 'question111111111111', 'answer1', '0', '');
INSERT INTO `zhu_consult` VALUES ('2', '', null, 'question2', 'question22222222222', 'answer2', '1', null);
INSERT INTO `zhu_consult` VALUES ('3', null, null, 'question3', 'question3333333333', 'answer3', '1', null);
INSERT INTO `zhu_consult` VALUES ('4', '弓海斌', '2014014328', 'AJAX是什么？', 'AJAX是什么？？？？？？？？？', '1.什么是Ajax? \r\nAjax的全称是：AsynchronousJavaScript+XML \r\n\r\n2.Ajax的定义： \r\nAjax不是一个技术，它实际上是几种技术，每种技术都有其独特这处，合在一起就成了一个功能强大的新技术。 \r\n\r\n3.Ajax包括： \r\nXHTML和CSS \r\n使用文档对象模型(DocumentObjectModel)作动态显示和交互 \r\n使用XML和XSLT做数据交互和操作 \r\n使用XMLHttpRequest进行异步数据接收 \r\n使用JavaScript将它们绑定在一起 \r\n\r\nWeb开发领域的最新时髦术语其实质是“旧貌换新颜”。 \r\n\r\nAjax（AsynchronousJavaScriptandXML）是结合了Java技术、XML以及JavaScript等编程技术，可以让开发人员构建基于Java技术的Web应用，并打破了使用页面重载的惯例。 \r\n\r\nAjax是使用客户端脚本与Web服务器交换数据的Web应用开发方法。这样，Web页面不用打断交互流程进行重新加裁，就可以动态地更新。使用Ajax，用户可以创建接近本地桌面应用的直接、高可用、更丰富、更动态的Web用户界面。 \r\n\r\n异步JavaScript和XML（AJAX）不是什么新技术，而是指这样一种方法：使用几种现有技术——包括级联样式表（CSS）、JavaScript、XHTML、XML和可扩展样式语言转换（XSLT），开发外观及操作类似桌面软件的Web应用软件。实现Ajax的所有组件都已存在了许多年。AdaptivePath的用户体验战略部门主管兼创办合伙人JesseJamesGarrett今年2月发表在AdaptivePath网站上的一篇文章中杜撰了这个术语。 ', '0', null);
INSERT INTO `zhu_consult` VALUES ('5', null, null, ' 关于jquery.ajax的例子', null, '看看这个教程把： http://www.gbin1.com/technology/jquery/20120307ajaxforjquerypart1/ (第一部分到第四部分），比较全的jquery AJAX教程', null, null);
INSERT INTO `zhu_consult` VALUES ('6', null, null, 'question4', null, null, null, null);
INSERT INTO `zhu_consult` VALUES ('7', null, null, 'question5', null, null, null, null);
INSERT INTO `zhu_consult` VALUES ('8', null, null, 'question6', null, null, null, null);
INSERT INTO `zhu_consult` VALUES ('9', null, null, 'question7', null, null, null, null);
INSERT INTO `zhu_consult` VALUES ('10', null, null, 'question8', null, null, null, null);
INSERT INTO `zhu_consult` VALUES ('11', null, null, 'question9', null, null, null, null);
INSERT INTO `zhu_consult` VALUES ('12', '弓海斌', '2014014328', 'aaa', 'sdasdas', null, '0', null);
INSERT INTO `zhu_consult` VALUES ('13', '弓海斌', '2014014328', '', '', null, '0', null);
INSERT INTO `zhu_consult` VALUES ('14', '', '', '', '', null, '0', null);
INSERT INTO `zhu_consult` VALUES ('15', '弓海斌', '2014014328', '', '', null, '0', null);

-- ----------------------------
-- Table structure for `zxzm_print`
-- ----------------------------
DROP TABLE IF EXISTS `zxzm_print`;
CREATE TABLE `zxzm_print` (
  `id` bigint(5) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `num` char(20) DEFAULT NULL,
  `class` char(20) DEFAULT NULL,
  `time` char(20) DEFAULT '0000-00-00',
  `print_type` char(10) DEFAULT NULL COMMENT '1表示中文 2表示英文',
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxzm_print
-- ----------------------------
INSERT INTO `zxzm_print` VALUES ('1', '', '', '1', '', '中文', '1');
INSERT INTO `zxzm_print` VALUES ('2', '弓海斌', null, null, '0000-00-00', '中文', '0');
INSERT INTO `zxzm_print` VALUES ('3', '弓海斌', '2014014328', '计科1403', '0000-00-00', '中文', '0');
INSERT INTO `zxzm_print` VALUES ('4', '弓海斌', '2014014328', '计科1403', '16-05-08', '英文', '2');
INSERT INTO `zxzm_print` VALUES ('5', '弓海斌', '2014014328', '计科1403', '16-05-08', '英文', '0');
