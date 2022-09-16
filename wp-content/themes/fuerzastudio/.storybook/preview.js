import config from '../config.json';

export const parameters = {
  server: {
    url: `${config.development.url}/storybook`,
  },
};
