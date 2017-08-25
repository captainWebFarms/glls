<script>
//    var Slick = require('vue-slick');
    import Slick from 'vue-slick';
    export default {

        components: { Slick },
        template: require('./Views/Gallery.html'),
        props: [
            'galleryCategories',
            'galleryImages'
        ],
        data(){
            return{
                selectedCategory: null,
                categoryImages: null,
                slickCategoryOptions: {
                    arrows: false,
//                    prevArrow: '<a class="slick-prev"><h3> < </h3></a>',
//                    nextArrow: '<a class="slick-next"><h3> > </h3></a>',
//                    appendArrows: '.slick-category-gallery'
//                    appendArrows: '.gallery'

                    // Any other options that can be got from plugin documentation
                    centerMode: true,
//                    centerPadding: '60px',
                    slidesToShow: 3,
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                arrows: false,
                                centerMode: true,
//                                centerPadding: '40px',
                                slidesToShow: 3
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: false,
                                centerMode: true,
//                                centerPadding: '40px',
                                slidesToShow: 1
                            }
                        }
                    ]
                },
                slickOptions: {
                    accessibility: true,
                    useCSS: true,
//                    easing: 'ease-in-out',
//                    touchMove: true,
                    arrows: false,
                    asNavFor: '.all-gallery-slides',
                    variableWidth: true,
                    centerMode: true,
                    centerPadding: '60px',
                    slidesToShow: 3,
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 3
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 1
                            }
                        }
                    ]
                    // Any other options that can be got from plugin documentation
                },
                slickAllOptions: {
                    asNavFor: '.slick-category-image',
                    arrows: false,
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    variableWidth: true,
                    centerMode: true,
                    centerPadding: '60px',
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 3
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 1
                            }
                        }
                    ],
                    // Any other options that can be got from plugin documentation
                },
                errors: []
            }
        },

        mounted() {
//            this.categoryImages = this.galleryImages;
//            this.reInit();
            this.selectCategory(0);
            // On before slide change
//            this.$refs.slickAll.afterChange();
            $('.slick-category-gallery').on('afterChange', function(event, categorySlick, currentSlide, nextSlide){
                console.log(this.galleryCategories[currentSlide].id);

                this.selectCategory(this.galleryCategories[currentSlide].id);
            }.bind(this));
        },
        updated(){
            this.reInit();
        },

        methods: {
            next() {
                this.$refs.slick.next();
            },

            prev() {
                this.$refs.slick.prev();
            },

            reInit() {
                console.log('re initialising images');
                // Helpful if you have to deal with v-for to update dynamic lists
                this.$refs.slick.reSlick();
                this.$refs.slickAll.reSlick();
            },
            reInitCategories(){
                console.log('re initialising images');
                // Helpful if you have to deal with v-for to update dynamic lists
                this.$refs.categorySlick.reSlick();

            },
            selectCategory(categoryId) {
                console.log(categoryId);
//                this.selectedCategory = categoryId;
                this.selectedCategory = this.galleryCategories[categoryId].id;
                this.categoryImages = [];
                this.categoryImages = this.galleryCategories[categoryId].gallery_images;
//                axios.get('/gallery/fetchCategoryImages/'+categoryId).then(function(response)
//                {
//                    this.categoryImages = [];
//                    var data = response.data;
//                    this.categoryImages = data;
//                }.bind(this)).catch(function(errors)
//                {
//                    this.errors = (errors.response.data);
//                }.bind(this));
            }
        }
    }
</script>
