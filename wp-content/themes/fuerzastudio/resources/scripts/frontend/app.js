import $ from 'jquery';

export default class App {
  constructor({ components, directives, pages }) {
    this.initialized = false;
    this.pages = pages;
    this.components = components;
    this.directives = directives;
  }

  bootstrap() {
    do {
      this.init();
    } while (!this.initialized);
  }

  init() {
    $('body').addClass('page-loaded');

    this.loadModules(this.directives);
    this.loadModules(this.components);
    this.loadModules(this.pages);

    this.initialized = true;
  }

  // eslint-disable-next-line class-methods-use-this
  loadModules(modules) {
    if (!modules || modules.length <= 0) {
      return;
    }

    // eslint-disable-next-line no-restricted-syntax
    for (const module of modules) {
      const moduleExists = module.selector && $(module.selector).length > 0;

      if (moduleExists) {
        module.bootstrap();
      }
    }
  }
}
