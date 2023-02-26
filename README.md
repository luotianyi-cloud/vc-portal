# VC 导航站 (VC Portal)
VC 导航站是一个简单的网站导航系统，同时收集了中文 VOCALOID 的各种常用网站。

## 构建
我们使用 Docker 构建。

```bash
git clone https://github.com/luotianyi-cloud/vc-portal.git
cd vc-portal
docker build -t vc-portal .
docker run -d -p 8000:80 -e CDN_ROOT=https://static.example.com --name portal vc-portal
```

## 环境变量
 - `CDN_ROOT`：CDN 根目录，用于加速静态文件的加载。默认为 `/assets`，对应代码仓库中的 `src/public/assets` 目录。注意：尾部不要加 `/`。

## 版权
本项目代码部分使用 MIT 许可证，内容部分使用 CC BY-NC-SA 4.0 许可证。内容部分包括：
 - `src/manifest.json`
 - `src/public/assets/favicon/**`
