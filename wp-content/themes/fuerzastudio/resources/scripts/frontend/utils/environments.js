/**
 * Check if we're inside an iframe.
 * Storybook preview is loaded inside an iframe.
 * @see https://stackoverflow.com/questions/205087/jquery-ready-in-a-dynamically-inserted-iframe
 * @returns {boolean}
 */
export function isStorybook() {
  try {
    return window.self !== window.top;
  // eslint-disable-next-line unicorn/prefer-optional-catch-binding
  } catch (error) {
    return true;
  }
}
