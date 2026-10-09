/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class', // toggled via a `dark` class on <html>, controlled by Alpine + localStorage
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        // Primary = "Blackboard Blue" — chrome, headers, links, primary actions
        primary: {
          50:  '#EEF4FB',
          100: '#D6E5F5',
          200: '#AECBEB',
          300: '#7FAEDE',
          400: '#4B8DCB',
          500: '#2F6FB0',
          600: '#1B4D89',   // base brand blue
          700: '#163F70',
          800: '#12314F',
          900: '#0C2338',
        },
        // Accent = "Highlighter Green" — progress, success, active states, CTAs
        accent: {
          50:  '#EAFBF3',
          100: '#CDF3E1',
          200: '#98E6C3',
          300: '#4BC98F',
          400: '#2EC085',
          500: '#1FAE72',   // base accent green
          600: '#14805A',
          700: '#106548',
          800: '#0B4A35',
        },
        ink: {
          950: '#0B1220', // dark-mode page background
          900: '#121B2E', // dark-mode surface
          800: '#1A2540',
          700: '#22304A', // dark-mode border
          400: '#8A97AC', // dark-mode muted text
          100: '#E7ECF3', // dark-mode primary text
        },
      },
      fontFamily: {
        // Display: Lexend — designed to improve reading proficiency, fits an education product
        display: ['Lexend', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        // Body: Inter — neutral, highly legible workhorse for long-form summaries
        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        // Utility: JetBrains Mono — subject codes, chapter tags, read-time badges
        mono: ['"JetBrains Mono"', 'ui-monospace', 'SFMono-Regular', 'monospace'],
      },
      borderRadius: {
        tab: '0.375rem 0.375rem 0 0',
      },
      boxShadow: {
        card: '0 1px 2px rgba(12, 35, 56, 0.06), 0 1px 1px rgba(12, 35, 56, 0.04)',
        'card-dark': '0 1px 2px rgba(0,0,0,0.4)',
      },
    },
  },
  plugins: [],
}
