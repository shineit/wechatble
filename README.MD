BXXH项目文件说明
==============
Make By：ZJL
2015/08/13 Updare By：LZH

##说明 
**这里的文档可以让你更好的了解`bxxh`项目，更好的使用。 **

**欢迎对文档内容进行补充，把`bxxh`项目变得更清晰易懂。**

##为你的github生成wiki
**如果你在github上fork了`bxxh`项目，而且想为项目生成wiki，可以用这里的文件来生成。**


###文件内容说明：
<根目录下>
1. cloud_callback.php，做为第三方云的后台入口
2. index.php，欢迎进入页面，后台工具的入口程序
3. README.MD，本文件

\config
4. config.php，定义项目所用到的全局参数
5. errCode.pho，辅助wechat.class，成为其SDK的一部分

\database
6. db.class.php, 定于数据库操作相关的API

\oam
  \sdk_qrcode  二位码图片生成SDK
7. app_mfuncard.sql, 数据库文件，部署前，动态导出本sql文件，并导入到第三方云上
8. DbTest.php，database临时测试程序
9. qrcode.png，二维码生成临时图像文件
10. tool.ajxhisdata.php 用于被tool.pageshare.php调用的后台历史数据访问php程序
11. tool.dev.bind.php，后台强制绑定用户
12. tool.pageshare.php，测试页面共享以及JSSDK功能
13. tool.php，测试工具角色，可以写测试脚本，进行在线测试
14. tool.qrcode.gen.php，受控index.php页面的二维码自动生成程序

\sdk
15. wechat.class.php，基础公号的SDK
16. wx_jssdk.php，JSSDK类封装

\service
17. l3_msg.class.php, device和微信云之间层3交互消息处理
18. wx_iot.class.php，硬件设备微信公众号处理

\wechat
19. tool.create.menu.php，后台强制创建菜单
20. user.interface.php, 用户辐射数据显示界面 


###SAE运行或部署步骤：
1. 配置Config.php运行环境参数
2. 打包本项目成*.zip文件
3. 上传到SAE云
4. 导出导入MySql数据库
5. 在微信接入第三方云界面，确认微信接口URL的Token验证通过
6. 在后台管理TOOL界面，确认API接口Token刷新机制工作正常


##生成page
**你也可以将wiki文档，生成为个人站点，会更加直观。**
**比如使用 Hexo 或者其他的框架之类。**
**这块的话，请自行搜索相关资料。**