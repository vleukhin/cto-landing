@servers(['oborud5' => 'oborud5', 'mini' => 'mini','front' => 'front','pogruz' => 'pogruz'])

@setup
    $landings = [
        'oborud5' => [
            'автосервисное.оборудование5.рф' => 'subdomains/xn--80aealbr9aeeqjeg/httpdocs',
            'компрессор.оборудование5.рф' => 'subdomains/xn--e1ajghcehcha/httpdocs',
            'стапель.оборудование5.рф' => 'subdomains/xn--80aksoig8e/httpdocs',
            'споттер.оборудование5.рф' => 'subdomains/xn--e1arcgbia/httpdocs',
            'шиномонтажное.оборудование5.рф' => 'subdomains/xn--80akcgufbcebe8b6d/httpdocs',
            'складское.оборудование5.рф' => 'subdomains/xn--80aidrcdyse/httpdocs',

            'акция.оборудование5.рф' => 'subdomains/xn--80aqf2c5b/httpdocs',

            'подъемник.оборудование5.рф' => 'subdomains/xn--d1acjiigdh5h/httpdocs',

            'мск-автосервисное.оборудование5.рф' => 'subdomains/xn----8sbgaobukrrhewhfek/httpdocs',
            'мск-подъемное.оборудование5.рф' => 'subdomains/xn----htbdavleifefv6j/httpdocs',
            'мск-шиномонтажное.оборудование5.рф' => 'subdomains/xn----8sbpdikndibchbe7ay9g/httpdocs',
        ],
        'mini' => [
            'минитрактор5.рф' => 'httpdocs',
            'навесное.минитрактор5.рф' => 'subdomains/xn--80aeja0bdhw/httpdocs',
        ],
        'front' => [
            'фронт-погрузчик.рф' => 'httpdocs',
        ],
        'pogruz' => [
            'вилочный.погрузчик5.рф' => 'subdomains/xn--b1amdhkf7d7a/httpdocs',
        ],

    ];
@endsetup

@task('update-sender-oborud5', ['on' => 'oborud5'])
    echo 'Updating sender on oborud5'
    @foreach($landings['oborud5'] as $name => $dir)
        echo 'Updating landing {{ $name }}'
        cd ~/{{ $dir }}/sender
        git pull
    @endforeach
@endtask

@task('update-sender-mini', ['on' => 'mini'])
    echo 'Updating sender on mini'
    @foreach($landings['mini'] as $name => $dir)
        echo 'Updating landing {{ $name }}'
        cd ~/{{ $dir }}/sender
        git pull
    @endforeach
@endtask

@task('update-sender-front', ['on' => 'front'])
    echo 'Updating sender on front'
    @foreach($landings['front'] as $name => $dir)
        echo 'Updating landing {{ $name }}'
        cd ~/{{ $dir }}/sender
        git pull
    @endforeach
@endtask

@task('update-sender-pogruz', ['on' => 'pogruz'])
    echo 'Updating sender on pogruz'
    @foreach($landings['pogruz'] as $name => $dir)
        echo 'Updating landing {{ $name }}'
        cd ~/{{ $dir }}/sender
        git pull
    @endforeach
@endtask

@story('update-sender')
    update-sender-oborud5
    update-sender-mini
    update-sender-front
    update-sender-pogruz
@endstory