export default class Route {
  constructor(url, title, pathHtml, pathJS, pathPHP = "") {
    this.url = url;
    this.title = title;
    this.pathHtml = pathHtml;
    this.pathJS = pathJS;
    this.pathPHP = pathPHP;
  }
}

