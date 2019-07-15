
# 下载地址

- http://pecl.php.net/package/redis
- https://github.com/phpredis/phpredis.git

# 安装并配置PHP扩展
## 安装 php-redis 扩展
```text
tar -xzvf  redis-4.2.0.tgz
cd  redis-4.2.0
/usr/local/product/php5.6/bin/phpize .
./configure --with-php-config=/usr/local/product/php5.6/bin/php-config
make && make install
```

## 配置 php-redis 扩展
```text
vi /usr/local/product/php5.6/lib/php.ini
# 追加以下内容
# 扩展 php-redis
extension=redis.so
```


# 可能遇到的问题
## 1. 版本不匹配
## 1.1. 问题描述
在执行make & make install 时，发生报错信息
```text
/bin/sh /usr/local/src/phpredis-2.2.8/libtool --mode=compile cc  -I. -I/usr/local/src/phpredis-2.2.8 -DPHP_ATOM_INC -I/usr/local/src/phpredis-2.2.8/include -I/usr/local/src/phpredis-2.2.8/main -I/usr/local/src/phpredis-2.2.8 -I/usr/local/php/include/php -I/usr/local/php/include/php/main -I/usr/local/php/include/php/TSRM -I/usr/local/php/include/php/Zend -I/usr/local/php/include/php/ext -I/usr/local/php/include/php/ext/date/lib  -DHAVE_CONFIG_H  -g -O2   -c /usr/local/src/phpredis-2.2.8/redis.c -o redis.lo 
mkdir .libs
 cc -I. -I/usr/local/src/phpredis-2.2.8 -DPHP_ATOM_INC -I/usr/local/src/phpredis-2.2.8/include -I/usr/local/src/phpredis-2.2.8/main -I/usr/local/src/phpredis-2.2.8 -I/usr/local/php/include/php -I/usr/local/php/include/php/main -I/usr/local/php/include/php/TSRM -I/usr/local/php/include/php/Zend -I/usr/local/php/include/php/ext -I/usr/local/php/include/php/ext/date/lib -DHAVE_CONFIG_H -g -O2 -c /usr/local/src/phpredis-2.2.8/redis.c  -fPIC -DPIC -o .libs/redis.o
In file included from /usr/local/src/phpredis-2.2.8/redis.c:27:0:
/usr/local/src/phpredis-2.2.8/common.h:3:40: 致命错误：ext/standard/php_smart_str.h：没有那个文件或目录
 #include <ext/standard/php_smart_str.h>
                                        ^
编译中断。
make: *** [redis.lo] 错误 1
```

## 1.2. 解决问题
本地php版本为php5.6,下载了对应的 redis-4.2.0.tgz ，重新安装即可。

## 1.3. 导致原因
最新的 php-redis 有几大分支,针对不同的php版本，有不同的redis分支相对应，测试找到对应的redis分支即可

- php-5.6 ~ redis-4.2.0
