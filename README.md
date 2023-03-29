## Joe

### 说明

本仓库 Fork 自 Joe 仓库： [HaoOuBa/Joe: A Theme of Typecho (github.com)](https://github.com/HaoOuBa/Joe)，在 Joe 7.3.6 版本的基础上修改了如下内容：

* 修改页脚形式
* 页脚添加鱼群动画（6.0版本以前的joe主题是有的，但是5.0版本以后作者去掉了这个功能）
* 修改留言区文字备注
* 修改文章更新文字提示
* 添加“碎碎念”页面模板

TODO：

- [x] 添加文章侧边栏目录功能
- [x] 更新静态文件的 cdn 链接，从 jsdelivr 链接变成本地链接（目前只是部分实现）
- [ ] 页脚添加站点总访问次数功能
- [ ] 碎碎念页面的数据可以分页查询



页面静态文件链接修改位置：

* assets/js：
  * joe.global.js：205行
* core：
  * factory.php：172——173行、187行——188行（调用函数为 `<?php Helper::options()->themeUrl('') ?>` ）
  * function.php：232行（文章列表缩略图）
* library：
  * files.php：194行、1239行、1250行、1423行、1475行——1484行、1489行
  * player.php：29——30行
* public：
  * include：23——39行（15个）
* archives.php：6行
* census.php：18行

* friends.php：20——23行

* functions.php：70处（可选择不改，影响不大）
* index.php：16——18行
* leaving.php：18行
* page.php：9——12行（3处）
* post.php：9——12行（3处）












### 以下为原项目的 Readme 内容

> 一款基于Typecho博客的双栏极致优化主题
- QQ交流群：457337579
- Git仓库：https://github.com/HaoOuBa/Joe
- 主题宗旨：简洁、超强、开源、精华

#### 主题简介：

1. 整包仅1.3Mb，却实现超强功能，极其迅速的响应（在开发时，都是使用30000篇文章进行开发测试）
2. 全站变量名、类名统一规范，重在方便更多人参与二开与拓展
3. 主题开箱即用，没有任何复杂的操作，无需像其他主题去特意创建个分类等。
4. 主题启用后，会置换Typecho的默认编辑器，采用 Joe 独家开发的编辑器
5. 主题响应式布局，不依赖任何响应式框架，采用 Joe 独家响应式
6. 主题在一切可能暴露的接口上，屏蔽sql注入、xss攻击风险，提供安全保障
7. 内置超强视频功能、包含直播功能、全网影视功能、文章内插入视频功能
8. 主题SEO极致优化，Lighthouse SEO跑分彪满100分
9. 主题色彩全局公用、小白轻松直接修改整站自定义主题色
10. 主题内置代码高亮、无需借助任何插件、支持200种语言
11. 主题首发极强画图回复功能，为你的博客带来用户互动，不再像传统博客那样，仅限文字
12. 主题内置sitemap、百度推送、友链、回复可见等，无需依赖任何插件

#### 主题开发

1. 开发时请使用 `VSCode编辑器` ，编辑器插件：`scss-to-css`（根据官方文档进行下载依赖库） 和 `minify`
2. css代码由scss编译成.min.css文件
3. js代码由minify压缩成.min.js文件

#### 主题目录介绍（非实时）

├── assets 主题静态资源

├── core 主题核心文件夹

├── library 主题内集成第三方库

├── public 共用的一些模块文件

├── typecho

│      ├── config 主题外观、功能设置的样式脚本目录

│      └── write Joe编辑器目录

├── 404.php 404页面

├── archive.php 搜索页面

├── friends.php 友情链接页面

├── functions.php 主题的外观、功能设置

├── index.php 博客首页页面

├── leaving.php 留言板页面

├── live.php 虎牙直播页面

├── package.json 主题发布至NPM仓库使用（勿动）

├── page.php 独立页面

├── post.php 文章页面

├── screenshot.php 主题截图图片

├── video.php 全网影视页面

└── wallpaper.php 壁纸页面
