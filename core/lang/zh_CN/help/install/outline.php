<?php
return "<h3>概述</h3>
    <p>
        将下载到的程序包解压，然后将所有文件上传到服务器，假设网站 URL 为 <span class=\"text-primary\">http://www.domain.com</span> 上传到根目录 /，以下说明均以此为例。
    </p>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">目录结构说明</div>
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th class=\"text-nowrap\">文件 / 目录</th>
                        <th class=\"text-nowrap\">用途</th>
                        <th>说明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=\"text-nowrap\">admin</td>
                        <td class=\"text-nowrap\">管理后台入口</td>
                        <td>管理后台入口，所有后台管理功能，均通过此目录实现。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">api</td>
                        <td class=\"text-nowrap\">API 接口入口</td>
                        <td>API 接口入口，所有提供给第三方的接口，均通过此目录实现。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">cache</td>
                        <td class=\"text-nowrap\">缓存文件</td>
                        <td>缓存文件目录，包括模板编译等数据，均保存在此。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">config</td>
                        <td class=\"text-nowrap\">配置文件</td>
                        <td>配置文件目录，所有系统的配置信息，均保存在此。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">core</td>
                        <td class=\"text-nowrap\">系统内核</td>
                        <td>系统内核，整个系统的重中之重，所有系统的核心功能，均保存在此。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">help</td>
                        <td class=\"text-nowrap\">帮助文档入口</td>
                        <td>帮助文档入口，提供详细的帮助信息。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">install</td>
                        <td class=\"text-nowrap\">安装程序入口</td>
                        <td>安装程序入口，系统的初次安装、升级，均通过此目录实现。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">static</td>
                        <td class=\"text-nowrap\">静态文件</td>
                        <td>静态文件目录，主要用于保存图片、CSS、JavaScript等静态文件。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">tpl</td>
                        <td class=\"text-nowrap\">模板文件</td>
                        <td>模板文件目录，所有向浏览者展示的界面，均通过保存在此的模板文件实现。</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>";