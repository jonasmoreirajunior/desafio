import $ from 'jquery';
import Navigation from 'swiper/modules/navigation/navigation';
import Pagination from 'swiper/modules/pagination/pagination';
import Swiper from 'swiper/core/core';

/**
 *
 * Slider component.
 *
 */
export default class Slider {
  constructor() {
    this.selector = '.c-slider';
    this.instances = [];
  }

  bootstrap() {
    this.init();
  }

  init() {
    const $sliders = $(this.selector).toArray();
    this.instances = $sliders.map((sliderEl) => {
      const globalParams = this.getGlobalParams();
      const params = $(sliderEl).data('slider-params') || {};

      return new Swiper(sliderEl, {
        ...globalParams,
        ...params,
      });
    });
  }

  /**
   * Default params for slider.
   *
   * Register all needed modules, global params that will be used in
   * any slider component.
   *
   * @returns {object} Global slider params.
   */
  // eslint-disable-next-line class-methods-use-this
  getGlobalParams() {
    return {
      modules: [Navigation, Pagination],
    };
  }
}
