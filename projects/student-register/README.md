学生注册程序
------------

选题背景
========
开学了，班主任需要统计班上每个学生的信息，但是为了节省纸张和环保，需要把统计结果放在文件而非写在纸上，需要你开发1个简单的PHP网站，提供学生填写个人信息的界面，并且在学生填写完毕提交之后，能够把学生的信息存储在文件中。

具体要求
========
* 需要统计的字段列表：姓名，性别，年龄，籍贯，身份证号，学号，个人爱好，政治面貌，电话，邮箱，身高；
* 上面的每个字段，保存时需要对用户填写的信息进行检查，比如姓名等不能为空，年龄在15~50，有些字段为了保证学生提交的信息合规，可以强制使用select；
* 在信息填写页面上，对需要学生填写的信息进行分组，比如基本信息，联系信息，扩展信息；
* 每次学生提交之后，如果他填写的信息合规，那么将其存储到与php脚本所在目录下面的data.csv中，每个学生的信息是1行；
* 附加要求：信息在存储的时候，把学号存在最前面，即作为第1个字段，即主键，并且同1个学生可以多次填写该表单，每次填写的信息如果有变化，以最新填写的为准（data.csv文件中只存在于该学生学号相关的1行数据）；
* 能用到html5和css3的地方大胆用；

相关知识点
==========
* CSV文件格式；
* PHP文件读写；
* PHP中超级全局变量的用法；
* PHP中的数组和字符串处理；

项目提示
========
* fopen，fgetcsv，fputcsv；
* $_GET, $_POST;
* array_unique, array_key_exists;