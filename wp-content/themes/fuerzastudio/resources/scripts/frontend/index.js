/* eslint-disable sort-imports */
import './vendor/*.js';
import '@styles/frontend';
import 'airbnb-browser-shims';
import './images';
import './spritesvg';
import $ from 'jquery';
// eslint-disable-next-line no-unused-vars
import config from '@config';

import { isStorybook } from './utils/environments';
import App from './app';
import components from './components';

const app = new App({
  components,
});

/**
 * When in storybook environment the DOM is loaded in
 * different time, so as a workround, we create the isStorybook
 * function and then start the app instead of wait the DOM Ready.w
 */
if (isStorybook()) {
  app.bootstrap();
} else {
  $(document).on('ready', () => {
    app.bootstrap();
  });
}
