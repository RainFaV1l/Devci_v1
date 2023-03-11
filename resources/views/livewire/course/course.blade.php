<section class="directions element-animation opacity-anim">
    <div class="container">
        <div class="directions-head">
            <div class="title">
                <h2>Направления</h2>
                <div class="line">
                </div>
            </div>
            <div class="directions-head_category">
                @foreach ($course_levels as $course_level)
                    <a href="#" class="">{{ $course_level['name'] }}</a>
                @endforeach
            </div>
        </div>
        <div class="directions-category">
            <div class="directions-category__main">
                <a href="" class="active">Все</a>
                @foreach ($categories as $category)
                    <a href="">{{ $category['name'] }}</a>
                @endforeach
            </div>
            <div class="directions-category__all-course">
                Всего курсов: 9
            </div>
        </div>
        <div class="directions-courses">
            @foreach ($courses as $course)
                <div class="best-course__item">
                    <div class="best-course__info">
                        <div class="best-course__text">
                            <div class="type">
                                {{ $course->level()['name'] }}
                            </div>
                            <div class="name-cat">
                                <div class="name">
                                    {{ $course['name'] }}
                                </div>
                                <div class="cat">
                                    Данный курс входит в категорию “{{ $course->category()['name'] }}”
                                </div>
                            </div>
                        </div>
                        <div class="best-course__img">
                            <img src="{{ $course->icon_url }}" alt="Изображение курса">
                        </div>
                    </div>
                    <div class="best-course__lessons">
                        <div class="best-course__time">
                            <div class="catalog-lesson">
                                12 уроков
                            </div>
                            {{--                            <div class="time">2 очных занятия</div> --}}
                        </div>
                        <a href="{{ route('catalog.show', $course['id']) }}" class="arrow">
                            Подробнее
                            <img src="{{ asset('assets/img/arrow2.png') }}" alt="Стрелка подробнее">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
