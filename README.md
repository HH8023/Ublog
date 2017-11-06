# Ublog
# Laravel 5.1  

--------------------------------------------------------------------------------

## 系统要求

```
PHP >= 5.5.9
Oracle VM VirtualBox =5.0.10
Ubuntu 14.04   Nginx  MySQL 
Composer 
```
--------------------------------------------------------------------------------
## 系统功能

- Laravel 5.1.x
- 后台

  - 用户管理
  - 角色管理


## 安装步骤:

- [Step 1: 获取代码](#step-1-获取代码)
- [Step 2: 生成配置文件](#step-2-生成配置文件)
- [Step 3: 新建数据库](#step-3-新建数据库)（现在暂时可以省略这步）
- [Step 4: 初始化系统](#step-4-初始化系统)
- [Step 5: 访问页面](#step-5-访问页面)


--------------------------------------------------------------------------------

### Step 1: 获取代码

```
git clone git@github.com:HH8023/Ublog.git
```

### Step 2: 生成配置文件

拷贝`.env.example`文件为`.env`，根据实际情况配置`.env`中的变量

### Step 3: 新建数据库（现在暂时可以省略这步）

根据步骤2中的配置信息，新建数据库，字符编码使用utf-8（(uft8_general_ci)

### Step 4: 初始化系统

在项目根目录执行：

```
composer update
```

然后：

```
php artisan key:generate
```
只要报successful就说明创建成功，接下来就可以访问页面
### Step 5: 访问页面
你现在使用自己虚拟机里设置的ip加上“/admin/index”在浏览器就可以登录系统

--------------------------------------------------------------------------------

## License

MIT license