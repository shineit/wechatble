BXXH项目文件说明
==============
Make By：ZJL

##说明 
**这里的文档可以让你更好的了解`bxxh`项目，更好的使用。 **

**欢迎对文档内容进行补充，把`bxxh`项目变得更清晰易懂。**

##为你的github生成wiki
**如果你在github上fork了`bxxh`项目，而且想为项目生成wiki，可以用这里的文件来生成。**


###文件内容说明：
1. config.php，定义项目所用到的全局参数
2. wechat.class.php，基础公号的SDK
3. wx_iot.class.php，硬件设备公号的SDK
4. errCode.pho，辅助wechat.class，成为其SDK的一部分
5. index.php，欢迎进入页面，后台工具的入口程序
6. phoqrcode目录，第三方二维码插件，完全不依赖外界的独立php插件
7. qrcode.png，二维码生成临时图像文件
8. cloud_callback.php，做为第三方云的后台入口
9. tool.php，后台配置管理工具的入口
10. DbTest.php，测试程序
11. Typical.zip，上传SAE云的临时打包文件
12. README.MD，本文件
13. 部署前，动态导出本项目MySql/bxxh的*.sql文件，并导入到第三方云上
14. tool.php，测试工具角色，可以写测试脚本，进行在线测试
15. tool.create.menu.php，后台强制创建菜单
16. tool.qrcode.gen.php，受控index.php页面的二维码自动生成程序
17. tool.dev.bind.php，后台强制绑定用户
18. tool.pageshare.php，测试页面共享以及JSSDK功能
19. wx_jssdk.php，JSSDK类封装


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