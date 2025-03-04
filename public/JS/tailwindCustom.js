tailwind.config = {
  theme: {
    screens: {
      'lg': '1110px',
      'md': '885px',
      'sm': '580px',
    },
    extend: {
      colors: {
        'redCustom': '#E3646E',
        'purpleCustom': '#BB72E9',
        'blueCustom': '#3996DB',
        'greenCustom': '#82BC4F',
        'yellowCustom': '#EABD5F',
        'gray-100Custom': '#0D0E11',
        'gray-200Custom': '#16181D',
        'gray-300Custom': '#292C34',
        'gray-400Custom': '#878EA1',
        'gray-500Custom': '#C0C4CE',
        'gray-600Custom': '#E2E4E9',
        'black-07': 'rgba(0, 0, 0, 0.7)',
        'black-08': 'rgba(0, 0, 0, 0.8)',
      },
      fontFamily: {
        'asap': ["Asap", "sans-serif"],
        'inconsolata': ["Inconsolata", "sans-serif"],
        'maven': ["Maven Pro", "sans-serif"],
      },
      backgroundImage: {
        'intro': "url('/assets/images/Background_Intro.png')",
        'contacts': "url('/assets/images/Background_Contacts.png')",
      },
      lineHeight: {
        '120': '120%',
        '140': '140%',
      },
      boxShadow: {
        'blueBorderHover': '0px 0px 0px 1.5px #3996DB',
      },
    }
  }
}