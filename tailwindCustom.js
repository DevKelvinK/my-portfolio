tailwind.config = {
  theme: {
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
      },
      fontFamily: {
        'asap': ["Asap", "sans-serif"],
        'inconsolata': ["Inconsolata", "sans-serif"],
        'maven': ["Maven Pro", "sans-serif"],
      },
      backgroundImage: {
        'intro': "url('./src/assets/images/Background_Intro.png')",
        'contacts': "url('./src/assets/images/Background_Contacts.png')",
      },
      lineHeight: {
        '120': '120%',
        '140': '140%',
      },
      boxShadow: {
        'redBorderHover': '0px 0px 0px 1.5px #E3646E',
        'blueBorderHover': '0px 0px 0px 1.5px #3996DB',
      },
    }
  }
}