$(document).ready(function() {
    $('#dashboard').addClass('active')
    var current_url = window.location.pathname
    
    console.log(current_url)
    if(current_url.includes('manage-staffs'))
    {
        $('#staff').addClass('active')
        $('#staff').find('ul').addClass('in')
        // $('#reports').find('ul').removeClass('in')
        // $('#reports').removeClass('active')
        $('#dashboard').removeClass('active')
        if(current_url.includes('my-profile')) {
            $('#profile').addClass('text-white')
        }
        if(current_url.includes('/staffs')) {
            $('#managestf').addClass('text-white')
        }
        if(current_url.includes('positions')) {
            $('#managestfpos').addClass('text-white')
        }
        if(current_url.includes('categories')) {
            $('#managestfcat').addClass('text-white')
        }
    }
    if(current_url.includes('manage-programs') || current_url.includes('manage-research'))
    {
        $('#programs').addClass('active')
        $('#programs').find('#ul').addClass('in')
        // $('#reports').find('ul').removeClass('in')
        // $('#reports').removeClass('active')
        $('#dashboard').removeClass('active')
        if(current_url.includes('/programs')) {
            $('#prog').addClass('text-white')
        }
        if(current_url.includes('/courses')) {
            $('#prog').addClass('text-white')
        }
        if(current_url.includes('positions')) {
            $('#managestfpos').addClass('text-white')
        }
        if(current_url.includes('/research')) {
            $('#research').addClass('text-white')
        }
        if(current_url.includes('research-projects')) {
            $('#research-projects').addClass('text-white')
            $('#research').removeClass('text-white')
        }
        if(current_url.includes('consultancy')) {
            $('#research-consultancy').addClass('text-white')
            $('#research').removeClass('text-white')
        }
        if(current_url.includes('manage-researchs/publications'))
        {
            $('#publication').addClass('active')
            $('#publication').find('a').addClass('in')
            $('#publicationInfo').addClass('text-white')
            $('#publicationsCategory').removeClass('text-white')
            $('#dashboard').removeClass('active')
        }
        if(current_url.includes('manage-researchs/publications-categories'))
        {
            $('#publication').addClass('active')
            $('#publication').find('a').addClass('in')
            $('#publicationsCategory').addClass('text-white')
            $('#publicationInfo').removeClass('text-white')
            $('#dashboard').removeClass('active')
        }
    }
    if(current_url.includes('manage-publications'))
    {
        $('#publications').addClass('active')
        $('#publications').find('ul').addClass('in')
        // $('#reports').find('ul').removeClass('in')
        // $('#reports').removeClass('active')
        $('#dashboard').removeClass('active')
        if(current_url.includes('/hod')) {
            $('#hod').addClass('text-white')
        }
        if(current_url.includes('/events')) {
            $('#events').addClass('text-white')
        }
    }
    if(current_url.includes('manage-views'))
    {
        $('#views').addClass('active')
        $('#views').find('a').addClass('in')
        $('#dashboard').removeClass('active')
    }

    if(current_url.includes('about-us'))
    {
        $('#about').addClass('active')
        $('#views').find('a').addClass('in')
        $('#views').removeClass('active')
        $('#dashboard').removeClass('active')
    }

    if(current_url.includes('publications-categories'))
    {
        $('#publication').addClass('active')
        $('#views').find('a').addClass('in')
        $('#views').removeClass('active')
        $('#dashboard').removeClass('active')
    }

    // if(current_url.includes('report')) {
    //     $('#reports').addClass('active')
    //     $('#setting').removeClass('active')
    //     $('#reports').find('ul').addClass('in')
    //     $('#setting').find('ul').removeClass('in')
    //     // $('#reports').removeClass('active')
    //     $('#dashboard').removeClass('active')
    // }

    // if(current_url.includes('stocks') || current_url.includes('Stock')) {
    //     $('#stocks').addClass('active')
    //     $('#setting').removeClass('active')
    //     $('#reports').find('ul').removeClass('in')
    //     $('#setting').find('ul').removeClass('in')
    //     $('#reports').removeClass('active')
    //     $('#dashboard').removeClass('active')
    // }
    // if(current_url.includes('user') || current_url.includes('users') || current_url.includes('roles') 
    //     || current_url.includes('permissions') || current_url.includes('classification')) {
    //     $('#manage-user').addClass('active')
    //     $('#manage-user').find('ul').addClass('in')
    //     $('#setting').removeClass('active')
    //     $('#reports').find('ul').removeClass('in')
    //     $('#setting').find('ul').removeClass('in')
    //     $('#reports').removeClass('active')
    //     $('#dashboard').removeClass('active')
    // }

    // if(current_url.includes('restaurants')) {
    //     $('#manage-system').addClass('active')
    //     $('#manage-user').removeClass('active')
    //     $('#manage-system').find('ul').addClass('in')
    //     $('#setting').removeClass('active')
    //     $('#reports').find('ul').removeClass('in')
    //     $('#setting').find('ul').removeClass('in')
    //     $('#reports').removeClass('active')
    //     $('#dashboard').removeClass('active')
    // }
})