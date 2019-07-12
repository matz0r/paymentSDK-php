<?php
if (empty($_POST)) {
    $_POST = [
        "locale" => "en",
        "custom_css_url" => "",
        "psp_name" => "elastic-payments",
        "eppresponse" => "PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48cGF5bWVudCB4bWxucz0iaHR0cDovL3d3dy5lbGFzdGljLXBheW1lbnRzLmNvbS9zY2hlbWEvcGF5bWVudCI+PG1lcmNoYW50LWFjY291bnQtaWQ+MmEwZTkzNTEtMjRlZC00MTEwLTlhMWItZmQwZmVlNmJlYzI2PC9tZXJjaGFudC1hY2NvdW50LWlkPjx0cmFuc2FjdGlvbi1pZD43MmJmZThmOS1iOTQ4LTRlMjUtOGE0NS1mMWY3ZDRmM2E0Yjg8L3RyYW5zYWN0aW9uLWlkPjxyZXF1ZXN0LWlkPjZkOWEwZDU4ZTE3OWRhMjc4NDM0M2RlNjkyYzIwMzA4PC9yZXF1ZXN0LWlkPjx0cmFuc2FjdGlvbi10eXBlPmRlYml0PC90cmFuc2FjdGlvbi10eXBlPjx0cmFuc2FjdGlvbi1zdGF0ZT5zdWNjZXNzPC90cmFuc2FjdGlvbi1zdGF0ZT48Y29tcGxldGlvbi10aW1lLXN0YW1wPjIwMTktMDUtMDhUMTI6NTU6NDguMDAwWjwvY29tcGxldGlvbi10aW1lLXN0YW1wPjxzdGF0dXNlcz48c3RhdHVzIGNvZGU9IjIwMS4wMDAwIiBkZXNjcmlwdGlvbj0iVGhlIHJlc291cmNlIHdhcyBzdWNjZXNzZnVsbHkgY3JlYXRlZC4iIHByb3ZpZGVyLXRyYW5zYWN0aW9uLWlkPSIySko0MTY2NUU0NTU5NTgyViIgc2V2ZXJpdHk9ImluZm9ybWF0aW9uIi8+PC9zdGF0dXNlcz48cmVxdWVzdGVkLWFtb3VudCBjdXJyZW5jeT0iRVVSIj4xMi41OTAwMDA8L3JlcXVlc3RlZC1hbW91bnQ+PHBhcmVudC10cmFuc2FjdGlvbi1pZD41YjM3MjAzOS0yOWVkLTRmNzEtOGFhNC00NGNmYzhjOTE5YzA8L3BhcmVudC10cmFuc2FjdGlvbi1pZD48YWNjb3VudC1ob2xkZXI+PGZpcnN0LW5hbWU+V2lyZWNhcmRidXllcjwvZmlyc3QtbmFtZT48bGFzdC1uYW1lPlNwaW50enlrPC9sYXN0LW5hbWU+PGVtYWlsPnBheXBhbC5idXllcjJAd2lyZWNhcmQuY29tPC9lbWFpbD48YWRkcmVzcz48c3RyZWV0MT5NYXJpYWhpbGZlcnN0cmHDn2U8L3N0cmVldDE+PGNpdHk+UG9ydGxhbmQ8L2NpdHk+PHN0YXRlPk9SPC9zdGF0ZT48Y291bnRyeT5VUzwvY291bnRyeT48L2FkZHJlc3M+PC9hY2NvdW50LWhvbGRlcj48c2hpcHBpbmc+PGZpcnN0LW5hbWU+bWF4PC9maXJzdC1uYW1lPjxsYXN0LW5hbWU+bXVzdGVybWFubjwvbGFzdC1uYW1lPjxwaG9uZT4rNDkgNzg4OTUwMDY2NzwvcGhvbmU+PGFkZHJlc3M+PHN0cmVldDE+bXVzdGVyc3RyYcOfZSAxPC9zdHJlZXQxPjxjaXR5PkhhbWJ1cmc8L2NpdHk+PGNvdW50cnk+REU8L2NvdW50cnk+PHBvc3RhbC1jb2RlPjIwMDk1PC9wb3N0YWwtY29kZT48L2FkZHJlc3M+PC9zaGlwcGluZz48aXAtYWRkcmVzcz4xMjcuMC4wLjE8L2lwLWFkZHJlc3M+PG5vdGlmaWNhdGlvbnM+PG5vdGlmaWNhdGlvbiB1cmw9Imh0dHA6Ly9tbDhsbzkuZXUubmdyb2suaW8vcGF5bWVudFNkay1waHAvZXhhbXBsZXMvcGF5bWVudHMvUGF5UGFsL25vdGlmeS5waHAiLz48L25vdGlmaWNhdGlvbnM+PHBheW1lbnQtbWV0aG9kcz48cGF5bWVudC1tZXRob2QgbmFtZT0icGF5cGFsIi8+PC9wYXltZW50LW1ldGhvZHM+PGFwaS1pZD4tLS08L2FwaS1pZD48Y2FuY2VsLXJlZGlyZWN0LXVybD5odHRwOi8vbWw4bG85LmV1Lm5ncm9rLmlvL3BheW1lbnRTZGstcGhwL2V4YW1wbGVzL3BheW1lbnRzL1BheVBhbC9yZXR1cm4ucGhwP3N0YXR1cz1zdWNjZXNzPC9jYW5jZWwtcmVkaXJlY3QtdXJsPjxmYWlsLXJlZGlyZWN0LXVybD5odHRwOi8vbWw4bG85LmV1Lm5ncm9rLmlvL3BheW1lbnRTZGstcGhwL2V4YW1wbGVzL3BheW1lbnRzL1BheVBhbC9yZXR1cm4ucGhwP3N0YXR1cz1mYWlsdXJlPC9mYWlsLXJlZGlyZWN0LXVybD48c3VjY2Vzcy1yZWRpcmVjdC11cmw+aHR0cDovL21sOGxvOS5ldS5uZ3Jvay5pby9wYXltZW50U2RrLXBocC9leGFtcGxlcy9wYXltZW50cy9QYXlQYWwvcmV0dXJuLnBocD9zdGF0dXM9c3VjY2Vzczwvc3VjY2Vzcy1yZWRpcmVjdC11cmw+PGxvY2FsZT5lbjwvbG9jYWxlPjxlbnRyeS1tb2RlPmVjb21tZXJjZTwvZW50cnktbW9kZT48d2FsbGV0PjxhY2NvdW50LWlkPlpOS1RYVUJOU1FFMlk8L2FjY291bnQtaWQ+PC93YWxsZXQ+PHByb3ZpZGVyLWFjY291bnQtaWQ+MDAwMDAwMzE3MTgyMDdENTwvcHJvdmlkZXItYWNjb3VudC1pZD48U2lnbmF0dXJlIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwLzA5L3htbGRzaWcjIj48U2lnbmVkSW5mbz48Q2Fub25pY2FsaXphdGlvbk1ldGhvZCBBbGdvcml0aG09Imh0dHA6Ly93d3cudzMub3JnL1RSLzIwMDEvUkVDLXhtbC1jMTRuLTIwMDEwMzE1Ii8+PFNpZ25hdHVyZU1ldGhvZCBBbGdvcml0aG09Imh0dHA6Ly93d3cudzMub3JnLzIwMDEvMDQveG1sZHNpZy1tb3JlI3JzYS1zaGEyNTYiLz48UmVmZXJlbmNlIFVSST0iIj48VHJhbnNmb3Jtcz48VHJhbnNmb3JtIEFsZ29yaXRobT0iaHR0cDovL3d3dy53My5vcmcvMjAwMC8wOS94bWxkc2lnI2VudmVsb3BlZC1zaWduYXR1cmUiLz48L1RyYW5zZm9ybXM+PERpZ2VzdE1ldGhvZCBBbGdvcml0aG09Imh0dHA6Ly93d3cudzMub3JnLzIwMDEvMDQveG1sZW5jI3NoYTI1NiIvPjxEaWdlc3RWYWx1ZT52eFRaTTA5bEFsWFBiNmNDZlRtN0svUkNpSkNqcGpLcmxBenJhVUh0d2xvPTwvRGlnZXN0VmFsdWU+PC9SZWZlcmVuY2U+PC9TaWduZWRJbmZvPjxTaWduYXR1cmVWYWx1ZT5acWVTZ01xNllsMnF2N05kRXNENlRkVm5MaWw4azlPOHpKMU5iUy8vRTJteVpwVndWdFhSSHF3YUt3b2IxSGlYN29KVFkyclprUEFpU2xMTXRlQzA5dWhrN05VVTNwZ0J6R1VUWWlGYUVvUWdSLzRQbituVkJOeHZSQzVRRHIrU3Rla0xZeUpuWlQ2dTdLNEovWGM2RmJBM2JBUlpjNEJTRTlvYmlXNExleXZFZ1FTeU4yN09xLytJU0JhZ0hIQWdoWG9UZ2xRVkp1RXhHc1B3Z2gwODJpb3hKdTlHTjlnNG1JMUcyNEFiNFU3UnUwcGtXanpzZE9qdXRnMEd4L3QwRUJhVERFT2ZVQkdkWG5xcjZXRmhod2o1UUF0TS9JbXNxQ2NVRjVSMDNIeER5RzlmVVpYSzBNb0plZDNjTlRUNEJjd3RsaVNTV3EyTy9wM3ZGNmErRHQ4c1JHVzBNY0ljc2VVeXlkWTVaR2h2b01tTU5zSEVNS3FzRnd5TWtHRk95ZXZEUVpOTG5ITmJuWVN2czNzMFFNaSswLzdRL2pLT09tZ0YyZVdpcjVsYjJZVmhZN3NmdkpLeTFhdUpSQUJRSnI2amhGRldFa1krQWlSYU9pMmFYMDlJR0JDNUYxMjM0TmJXekdUR2NTcis0T2h2RzZHZVV1TjNuQ1pnQmRtNmtzMVpmUm5lc3N1YUdXTkM4Y3haTlo3bkw5dEdvdm9sT0szSktndVVFMXZTNmFuNHpiNGdCUk9tSi82SktaODBZL0x5WFU5VVlmM3hCN243QXVqcTBCZ1I1TzZubnA0Kzl1M3pHK0ZnN28xdXBMYjJDY2FMeU1xY3VJVmtrbVQwRW82MzRtUU5Sc29sZ2F1ZkpxUWpWNko1UnZpR3NuUTAzLzRyS0NCZDhTZz08L1NpZ25hdHVyZVZhbHVlPjxLZXlJbmZvPjxYNTA5RGF0YT48WDUwOVN1YmplY3ROYW1lPjIuNS40LjQ9IzEzMDY0MjYxNzk2NTcyNmUsTD1Bc2NoZWltLENOPWFwaS10ZXN0LndpcmVjYXJkLmNvbSxPVT1PcGVyYXRpb25zLE89V2lyZWNhcmQgVGVjaG5vbG9naWVzIEdtYkgsQz1ERTwvWDUwOVN1YmplY3ROYW1lPjxYNTA5Q2VydGlmaWNhdGU+TUlJRjhqQ0NCTnFnQXdJQkFnSVFjRlM4cGR6NkZha2lCbW9pZzNmdE1EQU5CZ2txaGtpRzl3MEJBUXNGQURCYk1Rc3dDUVlEVlFRR0V3SkVSVEVSTUE4R0ExVUVDaE1JVjJseVpXTmhjbVF4T1RBM0JnTlZCQU1VTUhkcGNtVmpZWEprTFVSUkxVMVZReTFwYm5SbGNtNWhiQzEzWldKelpYSjJhV05sTFdsemMzVnBibWREUVY4d01qQWVGdzB4T1RBeE1UQXdNVEUwTVRoYUZ3MHlNVEF4TVRBd01URTBNVGhhTUlHS01Rc3dDUVlEVlFRR0V3SkVSVEVqTUNFR0ExVUVDaE1hVjJseVpXTmhjbVFnVkdWamFHNXZiRzluYVdWeklFZHRZa2d4RXpBUkJnTlZCQXNUQ2s5d1pYSmhkR2x2Ym5NeEhqQWNCZ05WQkFNVEZXRndhUzEwWlhOMExuZHBjbVZqWVhKa0xtTnZiVEVRTUE0R0ExVUVCeE1IUVhOamFHVnBiVEVQTUEwR0ExVUVCQk1HUW1GNVpYSnVNSUlDSWpBTkJna3Foa2lHOXcwQkFRRUZBQU9DQWc4QU1JSUNDZ0tDQWdFQXRySDNxeXVkK3VrdnlCSkJScTBHcS93MjhvVVFIeVNzN24rRmgxb21Mek5hMTBXc2lTKzNXbW5mNGpDRmRaUmQ3N0Y5QjVYY3hGZlpacjFYTE9SelRJRW9SMkNmMmEvSjRpS2xsaS9pdzU3dThzQ0hBanBUL3VSaXZwcnAweGV1UzBOVi9qMFB5SWdhRGtrdjZUNjJLeTRIL3pqcVFBZFhYcTZRd0J5MWtXWGVPdFMzaUZLS2xJMFJwRlNWZEg3cS9ZUjNSV0RaUVZWbmx1bE91WDhCbzJIM3J3YWxSbjRpdjR6YmNURzIxYlZvMDgyVExlWVFoNEp6N2s4dDRhZVEzdjZINkg2UjZibExsaS9jTTBOOE9hUlkxRWZmRDVjUjJMMlp6bDNMdkttVjNQYi9zcmZGU1JoUXJqblIzMGhhVURPQy9HbWRoMk5kWkdPWUJVNVAxSGN0SWQvYkRyWXpFZ2JYaEh2bVFqdEU3Z0dSK1VwYUd1WTdQT1g1WlI0MzRFNHV6Q2NlSWpjcXZjOUVVb1M5Lzc3L29reWRkOGF5UVZmeTRjWmJQeEVtTCs2bHA1elJ2VXd2blBPV1NXZmVXRTV5SXdJalc5bHc3M21KZzNMb3d6dnpZQ2d0YURVSFJ2ZFNsNCtXT3IrUHEyRGFpSXo4YkNvTmtFbnVyM0pNbkJnMUhzcFJHQlprMThudE5TMm5IaGp3bktzMTdyS08yL01sTitwY0pnaERkZUFtMTQ4TmxZQmdzQTVyZFhFMmFWRWdJSlVzNnFSSndITXIwZ0lVaWRhZ3pvekJGczZSbXhadW5hTTgrK0dZRGhQNDFoYW5UWGF5bEV0V2ppYXE5UVR6aXA4eCtBNXhrUXlDV1krVXNZWUZSUW1ITXdZSlpPVWI2Z2NXVG5NQ0F3RUFBYU9DQVlBd2dnRjhNQkVHQTFVZERnUUtCQWhQbXB5VU5mdlhpakFUQmdOVkhTTUVEREFLZ0FoRGJCNFcxRDBGRGpBTEJnTlZIUThFQkFNQ0JQQXdnZ0ZEQmdOVkhSOEVnZ0U2TUlJQk5qQ0NBVEtnZ2dFdW9JSUJLb2FCMVd4a1lYQTZMeTkzYVhKbFkyRnlaQzVzWVc0dlEwNDlkMmx5WldOaGNtUXRSRkV0VFZWRExXbHVkR1Z5Ym1Gc0xYZGxZbk5sY25acFkyVXRhWE56ZFdsdVowTkJYekF5TEVOT1BVTkVVQ3hEVGoxUWRXSnNhV01nUzJWNUlGTmxjblpwWTJWekxFTk9QVk5sY25acFkyVnpMRU5PUFVOdmJtWnBaM1Z5WVhScGIyNHNaR005ZDJseVpXTmhjbVFzWkdNOWJHRnVQMk5sY25ScFptbGpZWFJsVW1WMmIyTmhkR2x2Ymt4cGMzUS9ZbUZ6WlQ5dlltcGxZM1JEYkdGemN6MURVa3hFYVhOMGNtbGlkWFJwYjI1UWIybHVkSVpRYUhSMGNEb3ZMMk55YkM1M2FYSmxZMkZ5WkM1c1lXNHZRMUpNWDNkcGNtVmpZWEprTFVSUkxVMVZReTFwYm5SbGNtNWhiQzEzWldKelpYSjJhV05sTFdsemMzVnBibWREUVY4d01pNWpjbXd3RFFZSktvWklodmNOQVFFTEJRQURnZ0VCQUgzSzZOeklNaWpwQmtMcHg5MVZqQ2dEd3hYSFhMOE5rWkM1ck4vVXlnQXRjTHBHdzdZYlZTU2ZRT29sd3BiRE43WTdydDhKUFdobEg2RmJxTVlsVjJXS2NCM0t1V013WEdSOVVtZDdPZ0RXVVZFL2VXSitZMHd3UGZyenVoVmwxOS9NTTJmTkFUUmtPaUNaWFZyektiZStuZUNMUVBYNnp2TnAvVjlnMGh3b2YzMzlVUkhWZFFZc1c2U1BuczM0ZW1EMEoxcis3elg0V1F2NG9RT2FyZVgvOFZYeEl6a1VJRGo3elFPVEQ3Mk9ITytZcmp0Q1RrTGN2YThQMy84bzFoQXVabkZwdnA2bXRlN3VGS0R0U2NuU21qWHRjczZRVS9kUUVXRnQwNHdCQXFPK0JqTzgyMi96Vm9xdStydmJNWWl6QWJSaGpYc0JPbisrNCs5cVkyST08L1g1MDlDZXJ0aWZpY2F0ZT48L1g1MDlEYXRhPjwvS2V5SW5mbz48L1NpZ25hdHVyZT48L3BheW1lbnQ+"
    ];
}