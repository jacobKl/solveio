import { ApiResponse } from './../types/interfaces';

class Api {
    csrfToken: string

    constructor() {
        this.csrfToken = document.querySelector('[name="csrf-token"]')?.getAttribute('content') ?? ''
    }

    async get(url: string, queryParams: object, headers: {} = {}): Promise<ApiResponse> {
        try {
            const result = await fetch(`/api/${url}`, {
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': this.csrfToken,
                    ...headers
                }
            })
            const json = await result.json()
            return {
                hasError: false,
                result: json
            };
        } catch (error) {
            console.log(error);
            return {
                hasError: true,
            }
        }
    }

    async post(url: string, body: {}, headers: {} = {}): Promise<ApiResponse> {
        const formData = new FormData();

        for (const [key, value] of Object.entries(body)) {
            formData.append(key, value);
        }

        try {
            const result = await fetch(`/api/${url}`, {
                method: "POST",
                body: formData,
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': this.csrfToken,
                    ...headers
                }
            })
            const json = await result.json()
            return {
                hasError: false,
                result: json
            };
        } catch (error) {
            console.error("Wystąpił błąd.")
            return {
                hasError: true,
            }
        }
    }

    async newScramble() {
        const { hasError, result } = await this.get('new-scramble', {})

        return {
            hasError,
            ...result
        }
    }

    async submitSolve(solveTime: number) {
        const { hasError, result } = await this.post(
            'solve',
            {
                solveTime
            }
        );
    }

    async chooseCube(cubeId: number) {
        const { hasError, result } = await this.post('choose-cube', {
            cube_id: cubeId
        });

        return {
            hasError,
            ...result
        }
    }
}

const api = new Api();

export default api;
